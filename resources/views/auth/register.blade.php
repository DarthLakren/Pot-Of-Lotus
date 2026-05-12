@extends('layouts.app')

@section('contenido')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<section class="auth-container">
    
    <div class="auth-left">
        <img src="{{ asset('images/registro.jpg') }}" alt="Registro">
    </div>

    <div class="auth-right">

        <h1>CREAR UNA CUENTA</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>USUARIO</label>
            <input type="text" name="username" value="{{ old('username') }}" 
                   placeholder="Tu nombre de duelista" class="@error('username') is-invalid @enderror" required autofocus>
            @error('username')
                <span class="error-text">{{ $message }}</span>
            @enderror

            <label>CORREO</label>
            <input type="email" name="email" value="{{ old('email') }}" 
                   placeholder="ejemplo@correo.com" class="@error('email') is-invalid @enderror" required>
            @error('email')
                <span class="error-text">{{ $message }}</span>
            @enderror

            <label>CONTRASEÑA</label>
            <input type="password" name="password" placeholder="Mínimo 8 caracteres" 
                   class="@error('password') is-invalid @enderror" required>
            @error('password')
                <span class="error-text">{{ $message }}</span>
            @enderror

            <label>CONFIRMAR CONTRASEÑA</label>
            <input type="password" name="password_confirmation" placeholder="Repite tu contraseña" required>

            <div class="terminos">
                <input type="checkbox" name="terms" required>
                <span>TERMINOS Y CONDICIONES</span>
            </div>

            <button type="submit">
                Crear cuenta
            </button>

            <p class="login-link" onclick="window.location.href='{{ route('login') }}'">YA TIENES CUENTA?</p>

        </form>

    </div>

</section>
@endsection