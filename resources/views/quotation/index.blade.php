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
        <div class="p-5">
            <form id="formulario" class=" bg-slate-50 rounded p-3" action="{{ route('quotations.store') }}" method="POST">
                @csrf
                <h1 class="text-center text-2xl font-bold">Cotiza tu sistema</h1>
                <h2 class="text-center text-xl font-semibold">
                    Solicita tu cotización para instalar tu sistema de paneles solares
                </h2>
                <p class="text-center text-base">¡Estas a sólo unos sencillos pasos para ayudar al medio ambiente y al planeta!</p>
                <hr class="mb-3 mt-1">
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre*</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            type="text" id="name" name="name" placeholder="Nombre*" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            type="number" id="phone" name="phone" placeholder="Telefono" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-2 md:mt-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo electrónico</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            type="email" id="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-2 md:mt-3">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Dirección*</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            type="text" id="address" name="address" placeholder="Direccion*" value="{{ old('address') }}" required>
                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <h3 class="text-center text-lg font-medium mt-3 mb-3">Tu Consumo de luz</h3>

                <div class="flex flex-wrap -mx-2 ">
                    <div class="w-full md:w-1/2 px-2">
                        <label for="tcontrato" class="block mb-2 text-sm font-medium text-gray-900">
                            Tipo de contrato*
                        </label>
                        <select id="tcontrato" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            name="tcontrato">
                            <option value="0" style="display: none">Tipo de Contrato*</option>
                            <option value="1" {{ old('tcontrato') == '1' ? 'selected' : '' }}>1</option>
                            <option value="1A" {{ old('tcontrato') == '1A' ? 'selected' : '' }}>1A</option>
                            <option value="1B" {{ old('tcontrato') == '1B' ? 'selected' : '' }}>1B</option>
                            <option value="1C" {{ old('tcontrato') == '1C' ? 'selected' : '' }}>1C</option>
                            <option value="1D" {{ old('tcontrato') == '1D' ? 'selected' : '' }}>1D</option>
                            <option value="1E" {{ old('tcontrato') == '1E' ? 'selected' : '' }}>1E</option>
                            <option value="1F" {{ old('tcontrato') == '1F' ? 'selected' : '' }}>1F</option>
                            <option value="DAC" {{ old('tcontrato') == 'DAC' ? 'selected' : '' }}>DAC</option>
                        </select>
                        @error('tcontrato')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="periodo" class="block mb-2 text-sm font-medium text-gray-900">
                            Periodo de consumo*
                        </label>
                        <select id="periodo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            name="periodo">
                            <option value="" style="display: none">Periodo de Facturación*</option>
                            <option value="1" {{ old('periodo') == '1' ? 'selected' : '' }}>Mensual</option>
                            <option value="2" {{ old('periodo') == '2' ? 'selected' : '' }}>Bimestral</option>
                        </select>
                        @error('periodo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-2 md:mt-3">
                        <label for="con_act" class="block mb-2 text-sm font-medium text-gray-900">Consumo actual*</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            type="number" id="con_act" name="con_act" placeholder="Consumo Actual*" value="{{ old('con_act') }}" required>
                        @error('con_act')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-2 md:mt-3">
                        <label for="con_ant" class="block mb-2 text-sm font-medium text-gray-900">Consumo anterior*</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            type="number" id="con_ant" name="con_ant" placeholder="Consumo Anterior*" value="{{ old('con_ant') }}" required>
                        @error('con_ant')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-warning form-control bg-[#40b0e4] text-white w-full py-2 mt-4 rounded-sm focus:ring-4 focus:ring-blue-300" type="submit">
                    Cotizar
                </button>
                <span class="text-xs text-[#68656a]">* Campos obligatorios</span>
                <br>
                <span class="text-xs text-[#68656a]">** Al enviar tu cotización aceptas nuestros terminos y condiciones</span>
            </form>
        </div>
    </body>
</html>
