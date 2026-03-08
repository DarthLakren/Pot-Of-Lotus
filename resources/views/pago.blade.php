<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Pago - Estructura</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <header class="header-principal">
        <div class="contenedor-header">
            <div class="area-logo">Logo</div>
            <nav class="menu-principal">
                <ul>
                    <li><a href="{{ route('inicio') }}">TCG1</a></li>
                    <li><a href="{{ route('catalogo') }}">TCG 2</a></li>
                    <li>TCG3</li>
                </ul>
            </nav>
            <div class="area-busqueda"><input type="text" placeholder="Barra Buscadora"></div>
            <div class="area-cuenta">CUENTA</div>
        </div>
    </header>

    <main class="contenedor-pago">
        <section class="columna-resumen">
            <nav class="navegacion-retorno">
                <a href="{{ route('carrito') }}">< REGRESAR</a>
            </nav>

            <h1>LISTA DE ART</h1>
            <p class="subtitulo-pago">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

            <article class="tarjeta-producto-pago">
                <div class="img-placeholder-pago"></div>
                <div class="info-producto-pago">
                    <h3>CARTA</h3>
                    <p>Lorem ipsum<br>CANTIDAD: 1</p>
                </div>
                <div class="precio-pago">$31</div>
            </article>

            <div class="metodos-seccion">
                <h3>METODOS DE ENVIO</h3>
                <div class="input-falso">● Lorem ipsum <span>Gratis</span></div>

                <h3>METODOS DE PAGO</h3>
                <div class="input-falso">● Lorem ipsum</div>
            </div>
        </section>

        <section class="columna-formulario">
            <h2>DETALLES</h2>
            <p class="subtitulo-pago">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

            <form class="form-pago">
                <div class="campo">
                    <label>NOMBRE COMPLETO</label>
                    <input type="text">
                </div>
                <div class="campo">
                    <label>DIRECCION</label>
                    <input type="text">
                </div>
                <div class="campo">
                    <label>CIUDAD</label>
                    <input type="text">
                </div>
                <div class="fila-doble">
                    <div class="campo">
                        <label>CODIGO POSTAL</label>
                        <input type="text">
                    </div>
                </div>
                <div class="campo">
                    <label>ESTADO</label>
                    <input type="text">
                </div>

                <button type="button" class="btn-finalizar">FINALIZAR COMPRA</button>
            </form>
        </section>
    </main>

    <footer class="footer-dark">
        <div class="footer-top">
            <div class="footer-info-left">
                <div class="footer-logo-box">Logo</div>
                <div class="social-icons">f i</div>
            </div>
            <div class="footer-form-right">
                <input type="text" placeholder="Insert your email address here">
                <button class="btn-suscribir">Subscribe now</button>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-col">
                <strong>Help</strong>
                <ul><li>FAQ</li><li>Customer service</li></ul>
            </div>
            <div class="footer-col">
                <strong>Other</strong>
                <ul><li>Privacy Policy</li><li>Sitemapp</li></ul>
            </div>
        </div>
    </footer>

</body>
</html>
