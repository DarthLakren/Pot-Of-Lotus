<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear una cuenta</title>
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

    <main class="contenedor-login">
        <section class="columna-imagen-login">
            <div class="overlay-texto">
                <h1>IMAGEN DURISIMA</h1>
            </div>
        </section>

        <section class="columna-form-login">
            <div class="wrapper-form">
                <h2>Crear una cuenta</h2>

                <form action="#" method="POST">
                    @csrf
                    <div class="campo-login">
                        <label>CORREO</label>
                        <input type="email" placeholder="Lorem ipsum">
                        <p class="helper-text">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>

                    <div class="campo-login">
                        <label>CONTRASENA</label>
                        <input type="password" placeholder="Lorem ipsum">
                        <p class="helper-text">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>

                    <button type="submit" class="btn-iniciar">Crear cuenta</button>

                    <div class="opciones-login">
                        <label><input type="checkbox"> TERMINOS Y CONDICIONES</label>
                        <a href="{{ route('login') }}" class="enlace-registro">YA TIENES CUENTA?</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer-dark">
        </footer>

</body>
</html>
