<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Carta - Estructura</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <header class="header-principal">
        <div class="contenedor-header">
            <div class="area-logo">Logo</div>
            <nav class="menu-principal">
                <ul>
                    <li><a href="{{ route('magic') }}">TCG1</a></li>
                    <li><a href="{{ route('yugioh') }}">TCG 2</a></li>
                    <li><a href="{{ route('pokemon') }}">TCG3</a></li>
                </ul>
            </nav>
            <div class="area-busqueda">
                <input type="text" placeholder="Barra Buscadora">
            </div>
            <div class="area-cuenta">CUENTA</div>
        </div>
    </header>

    <main class="contenedor-detalle">
        <nav class="breadcrumb">
            Inicio > TCG 1 > <strong>CARTA</strong>
        </nav>

        <section class="producto-principal">
            <div class="producto-imagen-grande"></div>

            <article class="producto-info">
                <h1>CARTA</h1>
                <h3>DETALLES</h3>
                <div class="rating-placeholder">DETALLES ★★★★☆ 453 Reviews</div>

                <p class="descripcion-producto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat.
                </p>

                <div class="botones-detalles-secundarios">
                    <button>DETALLES</button>
                    <button>DETALLES</button>
                </div>

                <hr>

                <div class="selector-compra">
                    <div class="cantidad-control">
                        <span>Cantidad</span>
                        <div class="stepper">- 1 +</div>
                    </div>
                    <div class="precio-grande">$31</div>
                </div>

                <button class="boton-agregar">Agregar</button>
            </article>
        </section>

        <section class="seccion-similares">
            <h2>SIMILAR</h2>
            <div class="grid-similares">
                @for ($i = 0; $i < 4; $i++)
                <div class="card-similar">
                    <div class="img-similar"></div>
                    <span class="precio-badge">$45</span>
                    <p>CARTA</p>
                </div>
                @endfor
            </div>
        </section>
    </main>

    <footer class="footer-completo">
        <div class="footer-top">
            <div class="newsletter-info">
                <p>Let's stay in touch! Sign up to our newsletter...</p>
                <div class="logo-footer-box">Logo</div>
                <div class="social-icons">f i</div>
            </div>
            <div class="newsletter-form">
                <input type="text" placeholder="Insert your email address here">
                <button>Subscribe now</button>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-links-col">
                <strong>Help</strong>
                <ul><li>FAQ</li><li>Customer service</li><li>How to guides</li><li>Contact us</li></ul>
            </div>
            <div class="footer-links-col">
                <strong>Other</strong>
                <ul><li>Privacy Policy</li><li>Sitemap</li><li>Subscriptions</li></ul>
            </div>
        </div>
    </footer>

</body>
</html>
