@extends('layouts.app')

@section('contenido')


    <div class="max-w-2xl mx-auto my-12 bg-white shadow-md rounded-lg overflow-hidden">
        <h2 class="text-2xl font-bold p-6 border-b">Preguntas Frecuentes</h2>

        <div class="border-b">
            <div id="pregunta1" class="p-4 bg-gray-50 hover:bg-gray-200 cursor-pointer font-medium transition-colors">
                ¿Cuáles son los métodos de pago aceptados?
            </div>
            <div id="respuesta1" class="hidden p-4 text-gray-600 bg-white border-t">
                Aceptamos tarjetas de crédito (Visa, Mastercard), PayPal y transferencias bancarias directas.
            </div>
        </div>

        <div class="border-b">
            <div id="pregunta2" class="p-4 bg-gray-50 hover:bg-gray-200 cursor-pointer font-medium transition-colors">
                ¿Cuánto tiempo tarda en llegar mi pedido?
            </div>
            <div id="respuesta2" class="hidden p-4 text-gray-600 bg-white border-t">
                El tiempo estimado de entrega es de 3 a 5 días hábiles para envíos nacionales.
            </div>
        </div>

        <div class="border-b">
            <div id="pregunta3" class="p-4 bg-gray-50 hover:bg-gray-200 cursor-pointer font-medium transition-colors">
                ¿Tienen política de devoluciones?
            </div>
            <div id="respuesta3" class="hidden p-4 text-gray-600 bg-white border-t">
                Sí, tienes hasta 30 días después de recibir tu producto para solicitar una devolución total.
            </div>
        </div>
    </div>

    <script src="/js/FAQ.js"></script>

@endsection
