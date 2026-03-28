@extends('layouts.app')

@section('contenido')
<section class="carrito">

    <p class="regresar">← REGRESAR</p>

    <h1>Carrito de compras</h1>

    <!-- ITEM -->
    <div class="carrito-item">

        <!-- IZQUIERDA -->
        <div class="item-info">
            <img src="images/DB/MTG/01.webp">

            <div>
                <h3>Sorin Markov</h3>
                <span class="precio">$292</span>
            </div>
        </div>

        <!-- DERECHA -->
        <div class="item-control">

            <div class="cantidad-box">
                <span>CANTIDAD:</span>

                <div class="control">
                    <button class="menos">-</button>
                    <span class="num">01</span>
                    <button class="mas">+</button>
                </div>
            </div>

            <div class="total-box">
                <span>TOTAL:</span>
                <strong>$292</strong>
                <button class="quitar">QUITAR</button>
            </div>

        </div>

    </div>

    <!-- OPCIONES -->
    <div class="opciones">
        <label><input type="checkbox"> COMPRAR COMO REGALO</label>
        <label><input type="checkbox"> NOVEDADES</label>
    </div>

    <!-- BOTONES -->
    <div class="acciones">
        <button class="btn-pagar" onclick="window.location.href='/pago'">IR A PAGAR</button>
        <button class="btn-regresar" onclick="window.location.href='/'">REGRESAR</button>
    </div>

</section>
@endsection