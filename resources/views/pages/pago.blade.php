@extends('layouts.app')
@section('contenido')
<section class="checkout">

    <!-- IZQUIERDA -->
    <div class="checkout-left">

        <p class="regresar">← REGRESAR</p>

        <h2>LISTA DE ARTICULOS</h2>

        <!-- PRODUCTO -->
        <div class="item">
            <img src="images/DB/MTG/01.webp">

            <div class="info">
                <h3>Sorin Markov</h3>
                <p>Magic The Gathering</p>
                <p>CANTIDAD: 1</p>
            </div>

            <div class="precio">$292</div>
        </div>

        <!-- ENVÍO -->
        <h4>METODOS DE ENVIO</h4>
        <div class="opcion">
            <span>● Paquetes de Mexico</span>
            <span>Gratis</span>
        </div>

        <!-- PAGO -->
        <h4>METODOS DE PAGO</h4>
        <div class="opcion">
            <span>● Tarjeta</span>
        </div>

    </div>

    <!-- DERECHA -->
    <div class="checkout-right">

        <h2>ENVIO</h2>

        <form class="form-envio">
            <input type="text" placeholder="NOMBRE COMPLETO">
            <input type="text" placeholder="DIRECCION">
            <input type="text" placeholder="CIUDAD">
            <input type="text" placeholder="CODIGO POSTAL">
            <input type="text" placeholder="ESTADO">

            <button type="button" class="boton-placeholder" onclick="window.location.href='/'">
                FINALIZAR COMPRA
            </button>
        </form>

    </div>

</section>
@endsection