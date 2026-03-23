<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic - Categoría Específica</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <header class="header-principal">
        <div class="contenedor-header">
            <div class="area-logo">Logo</div>
            <nav class="menu-principal">
                <ul>
                    <li><a href="{{ route('inicio') }}" class="active">TCG1</a></li>
                    <li></li>
                    <li>TCG3</li>
                </ul>
            </nav>
            <div class="area-busqueda">
                <input type="text" placeholder="Barra Buscadora">
            </div>
            <div class="area-cuenta">CUENTA</div>
        </div>
    </header>

    <main>
        <section class="banner-categoria">
            <div class="banner-titulo">
                <h1>Magic</h1>
            </div>
            <div class="banner-imagen-placeholder"></div>
        </section>

        <div class="contenedor-layout-busqueda">
            <aside class="sidebar-filtros">
                <h3>Filtro</h3>
                <div class="grupo-filtro">
                    <select><option>Precio</option></select>
                    <select><option>Novedad</option></select>
                    <select><option>Mas vendidas</option></select>
                </div>
            </aside>

            <section class="contenido-grid">
                <div class="indicador-categoria">
                    <span>Magic</span>
                </div>

                <div class="grid-cartas">
                    @for ($i = 0; $i < 16; $i++)
                    <article class="card-item">
                        <div class="card-placeholder-img"></div>
                        <p>CARTA</p>
                        <span class="precio-tag">$15</span>
                    </article>
                    @endfor
                </div>
            </section>
        </div>

        



</body>
</html>
