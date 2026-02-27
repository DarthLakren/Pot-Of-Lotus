<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pot Of Lotus</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-4">

    <h1 class="mb-4">Shop</h1>

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">MiSitio</a>

        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Formulario -->
    <form class="mb-4">
        <input class="form-control mb-2" placeholder="Nombre">
        <button class="btn btn-primary">Enviar</button>
    </form>

    <!-- Tarjetas -->
    <div class="row">
        <div class="col-md-4">
            <div class="card"><div class="card-body">Card 1</div></div>
        </div>
        <div class="col-md-4">
            <div class="card"><div class="card-body">Card 2</div></div>
        </div>
        <div class="col-md-4">
            <div class="card"><div class="card-body">Card 3</div></div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>