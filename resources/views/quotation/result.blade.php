<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cotizador</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="container mx-auto py-12 bg-white mt-4 rounded p-5">
            <div class="message text-center">
                <h1 class="text-2xl font-bold">Resultados</h1>
                <h4 class="mt-4">
                    Se @if($quotation['consume']['panels'] == 1) necesita 1 panel solar @else necesitan {{ $quotation['consume']['panels'] }} paneles solares @endif para satisfacer tus necesidades energéticas
                </h4>
                <h4 class="mt-2">teniendo un costo de ${{ $quotation['consume']['price'] }} USD*.</h4>
                <h4 class="mt-4 text-center">Un ejecutivo te contactará muy pronto</h4>
            </div>

            <div class="mt-4">
                <span class="text-xs text-[#68656a]">* Precio sujeto al cambio de moneda EstadoUnidense a Mexicana</span>
                <br>
                <span class="text-xs text-[#68656a]">** Al enviar tu cotización aceptas nuestros términos y condiciones</span>
            </div>
        </div>
    </body>
</html>
