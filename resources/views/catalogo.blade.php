<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Cartas - Estructura</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="top-bar">OFERTAS</div>

    <header class="header-principal">
        <div class="contenedor-header">
            <li><div class="area-logo"><a href="{{ route('inicio') }}" class="active">Logo</a></div></li>
            <nav class="menu-principal">
                <ul>
                    <li>Magic</li>
                    <li>TCG 2</li>
                    <li>TCG3</li>
                </ul>
            </nav>
            <div class="area-busqueda">
                <input type="text" placeholder="Barra Buscadora">
            </div>
            <div class="area-cuenta">CUENTA</div>
        </div>
    </header>

    <main class="contenedor-catalogo">
        <aside class="sidebar-filtros">
            <h3>Filtro</h3>
            <div class="grupo-filtro">
                <select><option>Precio</option></select>
                <select><option>Novedad</option></select>
                <select><option>Mas vendidas</option></select>
            </div>
        </aside>

        <section class="contenido-cartas">
            <div class="encabezado-tabla">
                <span>TODAS LAS CARTAS</span>
            </div>

            <div class="grid-cartas">
                @for ($i = 0; $i < 16; $i++)
                <article class="card-item">
                    <div class="card-placeholder-img"></div>
                    <div class="card-info">
                       <li><a href="carta" class="active">carta</a></li>
                        <span class="precio-tag">$15</span>
                    </div>
                </article>
                @endfor
            </div>
        </section>
    </main>

    <section class="seccion-destacado">
        <div class="destacado-info">
            <h2>Carton Destacado</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="destacado-cards">
            <div class="mini-card">
                <div class="img-mini"></div>
                <p>$9</p>
                <strong>CARTA</strong>
            </div>
            <div class="mini-card">
                <div class="img-mini"></div>
                <p>$9</p>
                <strong>CARTA</strong>
            </div>
            <div class="flecha-slider">></div>
        </div>
    </section>

    <footer class="footer-completo">
        <div class="footer-top">
            <div class="footer-desc">Lorem ipsum dolor sit amet...</div>
            <div class="footer-form">
                <input type="text" placeholder="agregar correos">
                <button>Suscribirte</button>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-logo">Logo</div>
            <div class="footer-links">
                <div><strong>Help</strong><br>FAQ<br>Customer service</div>
                <div><strong>Other</strong><br>Privacy Policy<br>Sitemapp</div>
            </div>
        </div>
    </footer>

</body>
</html>
