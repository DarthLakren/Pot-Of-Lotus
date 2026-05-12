@extends('layouts.app')

@section('contenido')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<section class="auth-container">
    
    <div class="auth-left">
        <img src="{{ asset('images/registro.jpg') }}" alt="Login">
    </div>

    <div class="auth-right">

        <h1>INICIA SESIÓN</h1>

        @if (session('status'))
        <div class="alert alert-success border-0 shadow-sm mb-4" style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px;">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label>CORREO O USUARIO</label>
            <input type="text" name="username" value="{{ old('username') }}" 
                   placeholder="Tu correo o usuario" 
                   class="@error('username') is-invalid @enderror" required autofocus>
            @error('username')
                <span class="error-text">{{ $message }}</span>
            @enderror

            <label>CONTRASEÑA</label>
            <input type="password" name="password" placeholder="Tu contraseña" 
                   class="@error('password') is-invalid @enderror" required>
            @error('password')
                <span class="error-text">{{ $message }}</span>
            @enderror

            <button type="submit">
                Iniciar Sesión
            </button>

            <div class="terminos">
                <input type="checkbox" name="remember" id="remember">
                <span style="cursor: pointer;" onclick="document.getElementById('remember').click();">
                    MANTENER LA SESIÓN ACTIVA
                </span>
            </div>

            <p class="login-link" onclick="window.location.href='{{ route('register') }}'">
                ¿NO TIENES UNA CUENTA? REGÍSTRATE
            </p>

        </form>

    </div>

</section>
@endsection