@extends('layouts.app')

@section('contenido')
<div class="container mt-5">
    <div class="cuenta-container shadow p-4 bg-white rounded">
        <h2 class="mb-4">SUBIR NUEVA SINGLE</h2>

        <form action="{{ route('stock.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 border-end">
                    <h5 class="text-muted">Información del Producto</h5>
                    
                    <label class="form-label">Juego</label>
                    <select name="game_id" class="form-select mb-3">
                        <option value="1">Magic: The Gathering</option>
                        <option value="2">Yu-Gi-Oh!</option>
                        <option value="3">Mitos y Leyendas</option>
                    </select>

                    <label class="form-label">Nombre del Producto (Título)</label>
                    <input type="text" name="name" class="form-control mb-3" placeholder="Ej: Black Lotus">

                    <label class="form-label">Precio</label>
                    <input type="number" step="0.01" name="price" class="form-control mb-3">

                    <label class="form-label">Stock inicial</label>
                    <input type="number" name="stock" class="form-control mb-3">

                    <label class="form-label">Imagen de la carta</label>
                    <input type="file" name="image" class="form-control mb-3">
                </div>

                <div class="col-md-6">
                    <h5 class="text-muted">Detalles de la Carta</h5>

                    <label class="form-label">Edición / Set</label>
                    <input type="text" name="edition" class="form-control mb-3">

                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Rareza</label>
                            <input type="text" name="rarity" class="form-control mb-3">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Número de Carta</label>
                            <input type="text" name="card_number" class="form-control mb-3">
                        </div>
                    </div>

                    <label class="form-label">Condición</label>
                    <select name="condition" class="form-select mb-3">
                        <option value="NM">Near Mint</option>
                        <option value="LP">Lightly Played</option>
                        <option value="MP">Moderately Played</option>
                    </select>

                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input" type="checkbox" name="foil" value="1">
                        <label class="form-check-label">¿Es Foil?</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-purple w-100 mt-4">GUARDAR EN BASE DE DATOS</button>
        </form>
    </div>
</div>
@endsection