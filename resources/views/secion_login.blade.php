<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión</title>
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
                <h2>Inicia sesion</h2>

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

                    <button type="submit" class="btn-iniciar">Iniciar Sesion</button>

                    <div class="opciones-login">
                        <label><input type="checkbox"> MANTENER LA SESION</label>
                        <a href="{{ route('registro') }}" class="enlace-registro">NO TIENES CUENTA?</a>
                    </div>
                </form>
            </div>
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
