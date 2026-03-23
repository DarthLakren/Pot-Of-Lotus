<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div id="top-bar">
  🔥 Ofertas disponibles 🔥
</div>

<nav class="navbar navbar-expand-lg navbar-dark headerPoL">
  <div class="container">
<!-- LOGO -->
   <a class="navbar-brand d-flex align-items-center" href="/">
    <img src="{{ asset('images/logo.png') }}" 
       alt="Logo" 
       style="height: 50px; width: auto;" 
       class="me-2">
    <span class="fw-bold">PoT of Lotus</span>
    </a>
</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav me-auto">
              <!--BOTON MAGIC -->
        <li class="nav-item">
          <a class="nav-link" href="/magic">Magic: The Gathering</a>
        </li>
              <!--BOTON YUGI -->
        <li class="nav-item">
          <a class="nav-link" href="/yugioh">Yu-GI-Oh!</a>
        </li>
              <!--BOTON MITOS -->
        <li class="nav-item">
          <a class="nav-link" href="/mitos">Mitos y Leyendas</a>
        </li>
      </ul>
      
      
      <form class="d-flex mx-3 w-25" role="search" action="/buscar" method="GET">
            <input 
              class="form-control me-2" 
              type="search" 
              name="query"
              placeholder="Buscar productos..." 
            >
            <button class="btn btn-outline-light" type="submit">
              Buscar
            </button>
          </form>
      
      <ul class="navbar-nav align-items-center">
        <li class="nav-item me-3">
          <a class="nav-link position-relative" href="/carrito">
            <img src="{{ asset('images/shop.png') }}" 
              alt="Shop" 
              style="height: 25px; width: auto;" 
              class="me-2">
          </a>
        </li>

        
        @guest
          <li class="nav-item">
            <a class="nav-item me-3" href="/login">
            <img src="{{ asset('images/Account.png') }}" 
              alt="Account" 
              style="height: 30px; width: auto;" 
              class="me-2">
            </a>
          </li>
        @endguest

        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
              <li>
                <form method="POST" action="/logout">
                  @csrf
                  <button class="dropdown-item">Cerrar sesión</button>
                </form>
              </li>
            </ul>
          </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>