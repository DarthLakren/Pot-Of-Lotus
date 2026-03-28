
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>



<section class="auth-container">
    
    <div class="auth-left">
        <img src="images/registro.jpg" alt="Registro">
    </div>

    
    <div class="auth-right">

        <h1>INICA SESION</h1>

        <form>

            <label>CORREO</label>
            <input type="email" placeholder="Lorem ipsum">

            <label>CONTRASEÑA</label>
            <input type="password" placeholder="Lorem ipsum">

            <button type="button" onclick="window.location.href='/cuenta'">
                Iniciar Sesion
            </button>

            <div class="terminos">
                <input type="checkbox">
                <span>MANTENER LA SESION ACTIVA</span>
            </div>

            <p class="login-link" onclick="window.location.href='/registro'" >NO TIENES UNA CUENTA?</p>

        </form>

    </div>

</section>