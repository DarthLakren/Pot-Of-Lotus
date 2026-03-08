<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetado Estructural - Wireframe</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="top-bar">
        OFERTAS
    </div>

    <header class="header-principal">
        <div class="contenedor-header">
            <div class="area-logo">Logo</div>

            <nav class="menu-principal">
                <ul>
                    <li><a href="catalogo" class="active">Catalogo Completo</a></li>
                    <li><a href="magic" class="active">Magic</a></li>
                    <li><a href="yugioh" class="active">YuGiOh</a></li>
                    <li><a href="pokemon" class="active">Pokemon</a></li>
                    <li><a href="otro" class="active">otro</a></li>
                </ul>
            </nav>

            <div class="area-busqueda">
                <input type="text" placeholder="Barra Buscadora">
            </div>

            <div class="area-carrito">
            <li><a href="carrito" class="active">Carrito</a></li>
            </div>
            <li><a href="login" class="active">Iniciar Sesión</a></li>
        </div>
    </header>

    <main>
        <section class="seccion-hero">
            <div class="hero-imagen-placeholder">
                </div>
            <article class="hero-contenido">
                <h1>NOVEDADES</h1>
                <p>At our shop, we believe in the power of herbs to heal and nourish the body. That's why we've carefully curated a selection of the finest herbal teas from around the world.</p>
                <button class="boton-placeholder">Shop now</button>
            </article>
        </section>

        <section class="seccion-grid-novedades">
            <div class="contenedor-grid">
                <article class="item-novedad">
                    <div class="placeholder-img-cuadrada"></div>
                    <p>Novedades</p>
                </article>
                <article class="item-novedad">
                    <div class="placeholder-img-cuadrada"></div>
                    <p>Novedades</p>
                </article>
                <article class="item-novedad">
                    <div class="placeholder-img-cuadrada"></div>
                    <p>Novedades</p>
                </article>
            </div>
        </section>

        <section class="seccion-ofertas-descuentos">
            <h2>OFERTAS O DESCUENTOS</h2>
        </section>
    </main>

    <footer class="pie-pagina">
        <div class="ayuda-flotante">?</div>
    </footer>

</body>
</html>
