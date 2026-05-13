<div id="top-bar" class="text-center py-1" style=" color: white; font-size: 0.9rem;">
    🔥 Ofertas disponibles 🔥
</div>

<nav class="navbar navbar-expand-lg navbar-dark headerPoL">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 50px; width: auto;" class="me-2">
            <span class="fw-bold">PoT of Lotus</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/magic') }}">Magic: The Gathering</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/yugioh') }}">Yu-Gi-Oh!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/mitos') }}">Mitos y Leyendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cartas') }}">Colección</a>
                </li>
            </ul>
            
            <form class="d-flex mx-lg-3 my-2 my-lg-0 w-lg-25" role="search" action="{{ url('/buscar') }}" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Buscar cartas..." aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
            
            <ul class="navbar-nav align-items-center">
                <li class="nav-item me-3">
                    <a class="nav-link position-relative" href="{{ url('/carrito') }}">
                        <img src="{{ asset('images/shop.png') }}" alt="Shop" style="height: 25px; width: auto;">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                            0
                        </span>
                    </a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <img src="{{ asset('images/Account.png') }}" alt="Account" style="height: 30px; width: auto;">
                        </a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-2">{{ auth()->user()->username }}</span> 
                            <img src="{{ asset('images/Account.png') }}" alt="Account" style="height: 25px; width: auto; filter: invert(1);">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                            
                            {{-- 1. OPCIÓN SOLO PARA DUEÑOS (ADMINS) --}}
                            @if(auth()->user()->role === 'admin')
                                <li>
                                    <a class="dropdown-item fw-bold text-primary" href="{{ url('/stock/subir') }}">
                                        <i class="bi bi-plus-square-fill me-2"></i>Subir Stock (Singles)
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                            @endif

                            {{-- 2. OPCIÓN PARA TODOS LOS USUARIOS (Mantenemos Mis Pedidos) --}}
                            <li>
                                <a class="dropdown-item" href="{{ url('/cuenta') }}">
                                    <i class="bi bi-bag me-2"></i>Mis Pedidos
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            {{-- 3. CERRAR SESIÓN --}}
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>