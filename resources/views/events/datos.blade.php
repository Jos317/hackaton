<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main>
                
                    <div class="shadow-md p-6 lg:p-8 bg-white border-b border-gray-200">
                    
                        <h1 align="center" class=" no-underline mt-8 text-2xl font-semibold text-gray-900" >
                            Evento: {{$evento->nombre}}
                        </h1>
                    </div>
                    
                    <div class=" bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
                        <div class="panel-body">
                            @include('events.tabla')
                        </div>
                    </div>
                    
                    {{-- <div class="bg-green bg-opacity-25 grid grid-cols-3 md:grid-cols-3 gap-6 lg:gap-8 p-6 lg:p-8">
                        
                    </div>
                    <div class="bg-green bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8 ">
                        
                    </div> --}}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
