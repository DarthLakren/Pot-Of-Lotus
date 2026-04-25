@extends('layouts.app')

@section('contenido')


<div class="container my-5">
    <div class="card shadow">
        <div class="card-header">
            <h2 class="mb-0">Preguntas Frecuentes</h2>
        </div>

        <div class="card-body p-0">

            <!-- PREGUNTA 1 -->
            <div class="border-bottom">
                <div id="pregunta1" class="p-3 bg-light hover cursor-pointer fw-semibold">
                    ¿Cuáles son los métodos de pago aceptados?
                </div>
                <div id="respuesta1" class="d-none p-3 text-muted">
                    Aceptamos tarjetas de crédito (Visa, Mastercard), PayPal y transferencias bancarias directas.
                </div>
            </div>

            <!-- PREGUNTA 2 -->
            <div class="border-bottom">
                <div id="pregunta2" class="p-3 bg-light cursor-pointer fw-semibold">
                    ¿Cuánto tiempo tarda en llegar mi pedido?
                </div>
                <div id="respuesta2" class="d-none p-3 text-muted">
                    El tiempo estimado de entrega es de 3 a 5 días hábiles para envíos nacionales.
                </div>
            </div>

            <!-- PREGUNTA 3 -->
            <div>
                <div id="pregunta3" class="p-3 bg-light cursor-pointer fw-semibold">
                    ¿Tienen política de devoluciones?
                </div>
                <div id="respuesta3" class="d-none p-3 text-muted">
                    Sí, tienes hasta 30 días después de recibir tu producto para solicitar una devolución total.
                </div>
            </div>

        </div>
    </div>
</div>

<script src="/js/FAQ.js"></script>

@endsection
