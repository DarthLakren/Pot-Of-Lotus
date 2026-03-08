<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Estructura</title>
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
            <div class="area-busqueda">
                <input type="text" placeholder="Barra Buscadora">
            </div>
            <div class="area-cuenta">CUENTA</div>
        </div>
    </header>

    <main class="contenedor-carrito">
        <nav class="navegacion-retorno">
            <a href="{{ route('catalogo') }}">< REGRESAR</a>
        </nav>

        <section class="seccion-carrito">
            <h1>Carrito de compras</h1>

            <article class="item-carrito">
                <div class="producto-detalle-carrito">
                    <div class="mini-imagen-placeholder"></div>
                    <div class="texto-producto">
                        <h2>CARTA</h2>
                        <span class="precio-badge">$31</span>
                    </div>
                </div>

                <div class="controles-carrito">
                    <div class="control-cantidad">
                        <span>CANTIDAD:</span>
                        <div class="stepper-carrito">- 1 +</div>
                    </div>
                    <div class="accion-quitar">
                        <button class="btn-enlace">QUITAR</button>
                    </div>
                </div>
            </article>

            <div class="opciones-regalo">
                <label><input type="checkbox"> COMPRAR COMO REGALO</label>
                <label><input type="checkbox"> NOVEDADES</label>
            </div>

            <div class="acciones-finales">
               <div class="acciones-finales">
    <a href="{{ route('pago') }}" class="btn-pagar" style="text-decoration: none; display: inline-block; text-align: center;">
        IR A PAGAR
    </a>
    <a href="{{ route('catalogo') }}" class="btn-regresar" style="text-decoration: none; display: inline-block; text-align: center;">
        REGRESAR
    </a>
</div>
            </div>
        </section>
    </main>

    <footer class="footer-dark">
        <div class="footer-top">
            <div class="footer-info-left">
                <p>Let's stay in touch! Sign up to our newsletter...</p>
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
                <ul><li>FAQ</li><li>Customer service</li><li>Contact us</li></ul>
            </div>
            <div class="footer-col">
                <strong>Other</strong>
                <ul><li>Privacy Policy</li><li>Sitemapp</li><li>Subscriptions</li></ul>
            </div>
        </div>
    </footer>

</body>
</html>
