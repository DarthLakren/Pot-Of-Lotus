@extends('layouts.app')

@section('contenido')

<section class="cuenta-section">

<div class="cuenta-container">

    <!-- SIDEBAR -->

    <div class="cuenta-sidebar">

        <div class="cuenta-back">← Regresar</div>

        <div class="cuenta-menu">
            <div class="cuenta-item active">Datos</div>
            <div class="cuenta-item">Pedidos</div>
            <div class="cuenta-item">Lista de deseos</div>
        </div>

    </div>


    <!-- CONTENIDO -->

    <div class="cuenta-content">

        <h2 class="cuenta-title">DETALLES</h2>

        <form class="cuenta-form">

            <label>Nombre Completo</label>
            <input type="text">

            <label>Dirección</label>
            <input type="text">

            <label>Ciudad</label>
            <input type="text">

            <label>Código Postal</label>
            <input type="text">

            <label>Estado</label>
            <input type="text">

            <button class="cuenta-btn">ACTUALIZAR</button>

        </form>

    </div>

</div>

</section>

@endsection