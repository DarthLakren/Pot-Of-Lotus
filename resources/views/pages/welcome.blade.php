@extends('layouts.app')

@section('contenido')
    <main>
        <section class="seccion-hero">
            <div class="hero-imagen-placeholder">
                <img src="images/NOVEDADES.webp" class="img_prin" alt="Novedades">
                </div> 
            <article class="hero-contenido">
                <h1>Teenege Mutan Ninja Turtles!</h1>
                <p>El mejor equipo de tortugas sale de los sumideros para dar el salto a Magic: The Gathering. Las tortugas ninja toman la forma de cartas de Magic y usan su conocida fuerza (¡y resistencia!) para proteger las calles de Shredder y los mutantes que desatan el caos.</p>
                <button class="boton-placeholder">Compra YA</button>
            </article>
        </section>

        <section class="seccion-grid-novedades">
            <div class="contenedor-grid">
                <article class="item-novedad">
                    <div class="uplaceholder-img-cadrada">
                        <img src="images/yugi_nov.webp" class="img-novedades" alt="Novedades">
                    </div>
                    <p>Novedades</p>
                </article>
                <article class="item-novedad">
                    <div class="placeholder-img-cuadrada">
                         <img src="images/mtg_nov.webp" class="img-novedades" alt="Novedades">
                    </div>
                    <p>Novedades</p>
                </article>
                <article class="item-novedad">
                    <div class="placeholder-img-cuadrada">
                         <img src="images/mitos_nov.webp" class="img-novedades" alt="Novedades">
                    </div>
                    <p>Novedades</p>
                </article>
            </div>
        </section>

        <x-Descuentos />
        <x-Articulos />
    </main>
    
@endsection