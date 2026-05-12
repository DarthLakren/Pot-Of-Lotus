@extends('layouts.app')

@section('contenido')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<section class="cuenta-section">

    <div class="cuenta-container">

        <div class="cuenta-sidebar">
            <div class="cuenta-back" onclick="window.location.href='{{ url('/') }}'" style="cursor: pointer;">
                ← Regresar
            </div>

            <div class="cuenta-menu">
                <div class="cuenta-item active">Datos</div>
                <div class="cuenta-item">Pedidos</div>
                <div class="cuenta-item">Lista de deseos</div>
            </div>
        </div>

        <div class="cuenta-content">
            <h2 class="cuenta-title">DETALLES</h2>

            @if (session('status'))
                <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    <ul style="margin: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="cuenta-form" method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')

                <label>Nombre Completo</label>
                <input type="text" name="full_name" value="{{ old('full_name', $profile->full_name ?? '') }}" placeholder="Tu nombre real">

                <label>Dirección</label>
                <input type="text" name="address" value="{{ old('address', $profile->address ?? '') }}" placeholder="Calle, número y colonia">

                <label>Ciudad</label>
                <input type="text" name="city" value="{{ old('city', $profile->city ?? '') }}" placeholder="Tu ciudad">

                <label>Código Postal</label>
                <input type="text" name="zip_code" value="{{ old('zip_code', $profile->zip_code ?? '') }}" placeholder="Ej: 45500">

                <label>Estado</label>
                <input type="text" name="state" value="{{ old('state', $profile->state ?? '') }}" placeholder="Tu estado">

                <button type="submit" class="cuenta-btn">ACTUALIZAR</button>
            </form>
        </div>

    </div>

</section>
@endsection