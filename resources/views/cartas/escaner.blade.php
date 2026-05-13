@extends('layouts.app')

@section('contenido')
<style>
    .escaner-container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
    }

    .grid-2-columnas {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 30px;
    }

    .video-container {
        background: #1a1a2e;
        border-radius: 15px;
        overflow: hidden;
        border: 2px solid #ffd700;
    }

    #video {
        width: 100%;
        height: auto;
        transform: scaleX(-1);
        display: block;
    }

    .resultado-scaneo {
        background: #16213e;
        border-radius: 15px;
        padding: 20px;
        border: 1px solid #ffd700;
        overflow-y: auto;
        max-height: 400px;
    }

    .resultado-scaneo h3 {
        color: #ffd700;
        margin-bottom: 15px;
        text-align: center;
    }

    .texto-detectado {
        background: #0f0c29;
        padding: 12px;
        border-radius: 10px;
        color: #ffd700;
        font-family: monospace;
        margin: 15px 0;
        max-height: 150px;
        overflow-y: auto;
    }

    .capturar-btn {
        background: #ffd700;
        color: #1a1a2e;
        border: none;
        padding: 12px 24px;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.3s;
        width: 100%;
        margin-top: 15px;
    }

    .capturar-btn:hover {
        transform: scale(1.02);
    }

    .carta-encontrada {
        background: linear-gradient(135deg, #1a1a2e, #16213e);
        border-radius: 15px;
        padding: 15px;
        margin-top: 15px;
    }

    .carta-encontrada p {
        color: white !important;
        margin: 8px 0;
    }

    .carta-encontrada strong {
        color: #ffd700 !important;
    }

    .carta-encontrada h4 {
        color: #ffd700 !important;
        margin-bottom: 10px;
    }

    .loading {
        text-align: center;
        color: #ffd700;
        padding: 20px;
    }

    .error {
        color: #ff6b6b;
        text-align: center;
        padding: 10px;
    }

    .manual-section {
        background: #16213e;
        border-radius: 15px;
        padding: 20px;
        margin-top: 20px;
        border: 1px solid rgba(255,215,0,0.3);
    }

    .manual-section h3 {
        color: #ffd700;
        text-align: center;
        margin-bottom: 15px;
    }

    .search-box {
        display: flex;
        gap: 10px;
        max-width: 500px;
        margin: 0 auto;
    }

    .search-box input {
        flex: 1;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #ffd700;
        background: #0f0c29;
        color: white;
    }

    .search-box button {
        margin: 0;
    }

    @media (max-width: 768px) {
        .grid-2-columnas {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
</style>

<div class="escaner-container">
    <h1 style="text-align: center; color: #ffd700; margin-bottom: 20px;">📸 ESCANEAR CARTA</h1>

    <div class="grid-2-columnas">
        <div class="video-container">
            <video id="video" autoplay playsinline></video>
            <button class="capturar-btn" id="capturarBtn">🔍 ESCANEAR TEXTO</button>
        </div>

        <div class="resultado-scaneo">
            <h3>📋 RESULTADO</h3>
            <div id="resultadoScaneo">
                <p style="color: #ccc; text-align: center;">Presiona el botón para escanear</p>
            </div>
        </div>
    </div>

    <div class="manual-section">
        <h3>✍️ BÚSQUEDA MANUAL</h3>
        <div class="search-box">
            <input type="text" id="manualSearchInput" placeholder="Ej: Black Lotus, Zeus...">
            <button id="manualSearchBtn" class="capturar-btn" style="width: auto;">🔍 Buscar</button>
        </div>
        <div id="manualResultado" style="margin-top: 20px;"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/tesseract.js@5/dist/tesseract.min.js"></script>

<script>
    const video = document.getElementById('video');
    const capturarBtn = document.getElementById('capturarBtn');
    const resultadoScaneo = document.getElementById('resultadoScaneo');
    let stream = null;

    async function iniciarCamara() {
        try {
            stream = await navigator.mediaDevices.getUserMedia({ 
                video: { facingMode: 'environment' }
            });
            video.srcObject = stream;
        } catch (error) {
            resultadoScaneo.innerHTML = '<div class="error">❌ No se pudo acceder a la cámara</div>';
        }
    }

    function mostrarResultado(textoDetectado, carta) {
        let html = '';
        
        if (textoDetectado) {
            html += `<div class="texto-detectado">📝 Texto detectado:<br>${textoDetectado}</div>`;
        }
        
        if (carta) {
            html += `
                <div class="carta-encontrada">
                    <h4>✅ ¡CARTA ENCONTRADA!</h4>
                    <p><strong>${carta.nombre}</strong></p>
                    <p>🎮 ${carta.juego} | ⭐ ${carta.rareza}</p>
                    <p>📖 ${carta.descripcion}</p>
                    <p>💰 $${Number(carta.precio).toLocaleString()}</p>
                    <a href="/cartas" style="background: #ffd700; color: #1a1a2e; padding: 8px 16px; border-radius: 8px; text-decoration: none; display: inline-block; margin-top: 10px;">Ver todas</a>
                </div>
            `;
        } else if (textoDetectado && textoDetectado !== '🔍 Procesando imagen...') {
            html += `<div class="error">❌ No se encontró ninguna carta con ese texto</div>`;
        }
        
        resultadoScaneo.innerHTML = html || '<p style="color: #ccc; text-align: center;">Presiona el botón para escanear</p>';
    }

    async function escanearTexto() {
        mostrarResultado('🔍 Procesando imagen...', null);
        
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        const context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        
        try {
            const result = await Tesseract.recognize(
                canvas,
                'eng',
                {
                    logger: m => console.log(m),
                    psm: 7,
                    tessedit_char_whitelist: 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 '
                }
            );
            
            let textoDetectado = result.data.text.trim();
            const palabras = textoDetectado.split('\n');
            textoDetectado = palabras[0] || textoDetectado;
            
            if (textoDetectado.length > 2) {
                const response = await fetch(`/api/buscar-carta-por-texto?texto=${encodeURIComponent(textoDetectado)}`);
                const data = await response.json();
                mostrarResultado(textoDetectado, data.carta);
            } else {
                mostrarResultado('No se detectó texto claro', null);
            }
        } catch (error) {
            mostrarResultado(null, null);
            resultadoScaneo.innerHTML = `<div class="error">❌ Error: ${error.message}</div>`;
        }
    }

    capturarBtn.addEventListener('click', escanearTexto);
    iniciarCamara();

    window.addEventListener('beforeunload', () => {
        if (stream) stream.getTracks().forEach(track => track.stop());
    });

    // Búsqueda manual
    const manualInput = document.getElementById('manualSearchInput');
    const manualBtn = document.getElementById('manualSearchBtn');
    const manualResultado = document.getElementById('manualResultado');

    async function buscarManual() {
        const query = manualInput.value.trim();
        if (!query) return;
        manualResultado.innerHTML = '<div class="loading">🔍 Buscando...</div>';
        try {
            const response = await fetch(`/api/buscar-carta-por-texto?texto=${encodeURIComponent(query)}`);
            const data = await response.json();
            if (data.carta) {
                manualResultado.innerHTML = `
                    <div class="carta-encontrada">
                        <h4>✅ ¡CARTA ENCONTRADA!</h4>
                        <p><strong>${data.carta.nombre}</strong></p>
                        <p>🎮 ${data.carta.juego} | ⭐ ${data.carta.rareza}</p>
                        <p>📖 ${data.carta.descripcion}</p>
                        <p>💰 $${Number(data.carta.precio).toLocaleString()}</p>
                    </div>
                `;
            } else {
                manualResultado.innerHTML = `<div class="error">❌ No se encontró: "${query}"</div>`;
            }
        } catch (error) {
            manualResultado.innerHTML = '<div class="error">❌ Error al buscar</div>';
        }
    }

    manualBtn.addEventListener('click', buscarManual);
    manualInput.addEventListener('keypress', e => { if (e.key === 'Enter') buscarManual(); });
</script>
@endsection