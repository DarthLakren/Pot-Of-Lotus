@extends('layouts.app')

@section('contenido')
<style>
    /* MISMO ESTILO QUE USA TU COMPAÑERO */
    .contenedor-mis-cartas {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
        justify-content: center;
    }

    /* ESTA ES LA CLASE QUE USA ÉL - IGUALITA */
    .card-carta2 {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        width: 260px;
        background: white;
        border: 0.5vw solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .card-carta2:hover {
        transform: translateY(-5px);
    }

    /* EL CONTENEDOR DE LA IMAGEN IGUAL QUE ÉL */
    .card-carta2 .img-container {
        position: relative;
        width: 100%;
    }

    .card-carta2 .img-container img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        display: block;
    }

    /* EL PRECIO IGUAL QUE ÉL */
    .card-carta2 .precio {
        position: absolute;
        top: 10px;
        left: 10px;
        background: white;
        padding: 5px 10px;
        border-radius: 10px;
        font-weight: bold;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }

    /* LA INFO IGUAL QUE ÉL */
    .card-carta2 .info {
        padding: 15px;
        text-align: center;
    }

    .card-carta2 .info h3 {
        font-size: 1rem;
        margin: 0;
        color: #333;
    }

    /* EXTRA: para mostrar rareza y juego (él no lo tiene, lo agregamos nosotros) */
    .card-carta2 .detalle {
        font-size: 0.7rem;
        color: #666;
        margin-top: 5px;
    }

    /* HEADER DE LA PÁGINA */
    .header-coleccion {
        text-align: center;
        margin-bottom: 30px;
        margin-top: 20px;
    }

    .header-coleccion h1 {
        color: #ffd700;
        margin-bottom: 10px;
    }

    .badge-coleccion {
        background: #6644AE;
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        display: inline-block;
    }
</style>

<div class="header-coleccion">
    <h1> COLECCIÓN DE CARTAS</h1>
    <p class="text-light">Tu colección personal de cartas</p>
    <div class="badge-coleccion">
         {{ $cartas->count() }} cartas en tu colección
    </div>
</div>

<!-- MISMO CONTENEDOR QUE USA ÉL -->
<div class="contenedor-mis-cartas">
    @foreach($cartas as $carta)
        <!-- MISMA CARD QUE USA ÉL: card-carta2 -->
        <div class="card-carta2">
            <div class="img-container">
                @if($carta->imagen)
                    <img src="{{ asset('images/' . $carta->imagen) }}" alt="{{ $carta->nombre }}">
                @else
                    <div style="width: 100%; height: 260px; background: #7B6AA8; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 48px;">
                            @switch($carta->juego)
                                @case('Magic') ✨ @break
                                @case('Yu-Gi-Oh!') 🎴 @break
                                @case('Mitos') 🏛️ @break
                                @case('TMNT') 🐢 @break
                                @default 🃟
                            @endswitch
                        </span>
                    </div>
                @endif
                <div class="precio"> ${{ number_format($carta->precio, 2) }}</div>
            </div>
            <div class="info">
                <h3>{{ $carta->nombre }}</h3>
                <div class="detalle">{{ $carta->juego }} | ⭐ {{ $carta->rareza }}</div>
                <div class="detalle" style="font-size: 0.65rem;">{{ $carta->descripcion }}</div>
            </div>
        </div>
    @endforeach
</div>
@endsection