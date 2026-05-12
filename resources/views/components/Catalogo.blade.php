<section class="catalogo">
    <aside class="filtro p-3">
        <div class="mb-4">
            <div class="input-group shadow-sm">
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search text-muted"></i> 
                </span>
                <input type="text" id="buscador" placeholder="Buscar por nombre" class="form-control border-start-0 ps-0" autocomplete="off">
            </div>
        </div>

        <h3 class="text-white text-center mb-4">FILTROS</h3>

<div class="grupo-filtro mb-4" id="grupo-single">
    <button id="cat-single" data-categoria="single" type="button" class="btn btn-outline-primary w-100 mb-2" onclick="limpiarGrupo('single')">SINGLES</button>
    
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="nuevo" data-grupo="single" id="s-nuevo">
        <label class="form-check-label text-white" for="s-nuevo">Nuevo</label>
    </div>
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="moderado" data-grupo="single" id="s-moderado">
        <label class="form-check-label text-white" for="s-moderado">Moderadamente Usado</label>
    </div>
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="danado" data-grupo="single" id="s-danado">
        <label class="form-check-label text-white" for="s-danado">Dañado</label>
    </div>
</div>

<div class="grupo-filtro mb-4" id="grupo-sobre">
    <button id="cat-sobre" data-categoria="sobre" type="button" class="btn btn-outline-primary w-100 mb-2" onclick="limpiarGrupo('sobre')">SOBRES</button>
    
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="play" data-grupo="sobre" id="sb-play">
        <label class="form-check-label text-white" for="sb-play">Play Booster</label>
    </div>
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="booster" data-grupo="sobre" id="sb-booster">
        <label class="form-check-label text-white" for="sb-booster">Booster</label>
    </div>
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="collector" data-grupo="sobre" id="sb-collector">
        <label class="form-check-label text-white" for="sb-collector">Collector</label>
    </div>
</div>

<div class="grupo-filtro mb-4" id="grupo-sellado">
    <button id="cat-sellado" data-categoria="sellado" type="button" class="btn btn-outline-primary w-100 mb-2" onclick="limpiarGrupo('sellado')">SELLADO</button>
    
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="presentacion" data-grupo="sellado" id="sl-presentacion">
        <label class="form-check-label text-white" for="sl-presentacion">Presentación</label>
    </div>
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="bundle" data-grupo="sellado" id="sl-bundle">
        <label class="form-check-label text-white" for="sl-bundle">Bundle</label>
    </div>
    <div class="form-check">
        <input class="form-check-input check-filtro" type="checkbox" value="precon" data-grupo="sellado" id="sl-precon">
        <label class="form-check-label text-white" for="sl-precon">Preconstruido</label>
    </div>
</div>

<button id="cat-todo" data-categoria="todos" class="btn btn-outline-light btn-sm w-100 mt-2">Limpiar Todo / Ver Todos</button>
    </aside>

    <div class="contenido">
        <h2>CATÁLOGO DE PRODUCTOS</h2>
        <div class="grid-cartas row">

        
                        {{-- CARTAS --}}
            <div class="col-md-4 mb-4 item-producto single nuevo"> 
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Cards/Sorin_Markov.webp" alt="Sorin Markov" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Sorin Markov</h5>
                        <p class="precio fw-bold text-success">$292</p>
                        <p class="text-muted small">Estado: Nuevo</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 item-producto single moderado"> 
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Cards/Lightning_Bold.webp" alt="Lightning Bold" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Lightning Bold</h5>
                        <p class="precio fw-bold text-success">$83</p>
                        <p class="text-muted small">Estado: Moderadamente Usado</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 item-producto single danado"> 
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Cards/Dark_Ritual.webp" alt="Dark Ritual" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Dark Ritual</h5>
                        <p class="precio fw-bold text-success">$325</p>
                        <p class="text-muted small">Estado: Dañado</p>
                    </div>
                </div>
            </div>

                        {{-- SOBRES --}}
            <div class="col-md-4 mb-4 item-producto sobre collector">
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Sobres/collector_booster_mh3.webp" alt="Sobre Collector" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Sobre Collector MH3</h5>
                        <p class="precio fw-bold text-success">$550</p>
                        <p class="text-muted small">Edición: Collector</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 item-producto sobre booster">
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Sobres/Sobre_Znk.png" alt="Sobre Booster" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Sobre Booster Zendikar</h5>
                        <p class="precio fw-bold text-success">$300</p>
                        <p class="text-muted small">Edición: Booster</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 item-producto sobre play">
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Sobres/sobre_avatar.jpg" alt="Sobre Play Booster" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Sobre Play Booster Avatar</h5>
                        <p class="precio fw-bold text-success">$150</p>
                        <p class="text-muted small">Edición: Play Booster</p>
                    </div>
                </div>
            </div>



                        {{-- SELLADO --}}
            <div class="col-md-4 mb-4 item-producto sellado precon">
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Sellado/Eldrazi_precon.webp" alt="Eldrazi Incursion" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Eldrazi Incursion (Mazo)</h5>
                        <p class="precio fw-bold text-success">$2,400</p>
                        <p class="text-muted small">Tipo: Preconstruido</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 item-producto sellado presentacion">
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Sellado/FF_presentacion.png" alt="Final Fantasy Presentacion" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Final Fantasy Presentacion</h5>
                        <p class="precio fw-bold text-success">$700</p>
                        <p class="text-muted small">Tipo: Presentacion</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4 item-producto sellado bundle">
                <div class="card producto h-100 text-center shadow-sm">
                    <div class="contenedor-imagen-tcg">
                        <img src="images/DB/MTG/Sellado/bundle_avatar.webp" alt="Avatar Bundle" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="nombre mt-1 fs-6">Avatar Bundle</h5>
                        <p class="precio fw-bold text-success">$3,000</p>
                        <p class="text-muted small">Tipo: Bundle</p>
                    </div>
                </div>
            </div>

     <script src="/js/buscador.js"></script>
    <script src="/js/categorias.js"></script>
    <script src="/js/subcategorias.js"></script>
    <script src="/js/efectos.js"></script>
  
</section>