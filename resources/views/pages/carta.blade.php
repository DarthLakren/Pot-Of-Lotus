@extends('layouts.app')

@section('contenido')
<section class="producto-detalle">

    <!-- IMAGEN -->
    <div class="producto-img">
        <img src="images/DB/MTG/01.webp" alt="Sorin Markov">
    </div>

    <!-- INFO -->
    <div class="producto-info">

        <h1>Sorin Markov</h1>
        <h3 class="subtitulo">Magic The Gathering</h3>

        <p class="titulo-detalles">DETALLES</p>

        <div class="rating">
            ★ ★ ★ ★ ☆
            <span>(412 Reviews)</span>
        </div>

        <p class="descripcion">
            +2: Sorin Markov deals 2 damage to any target and you gain 2 life.
            -3: Target opponent's life total becomes 10.
            -7: You control target player during that player's next turn.
        </p>

        <hr>

        <!-- CANTIDAD -->
        <div class="cantidad-precio">

            <div class="cantidad">
                <span>Cantidad</span>
                <div class="control">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </div>
            </div>

            <div class="precio">
                $31
            </div>

        </div>

        <!-- BOTÓN -->
        <button class="btn-agregar" onclick="window.location.href='/carrito'">AGREGAR</button>

    </div>

</section>
<x-Catalogo />

@endsection