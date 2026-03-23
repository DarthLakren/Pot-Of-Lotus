@extends('layouts.app')

@section('contenido')
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
@endsection