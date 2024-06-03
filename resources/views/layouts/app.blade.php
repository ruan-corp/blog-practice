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
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.components.navigation')

            <section class="grid grid-cols-6 min-h-screen">
                <div>
                    {{-- Side Menu --}}
                    @include('layouts.components.side-menu')
                </div>

                <div class="col-span-5">
                    <!-- Page Heading -->
                    @isset($header)
                        <header class="bg-white shadow">
                            <div class="flex justify-center py-6 px-4 font-semibold text-xl text-gray-800 leading-tight">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset


                    <!-- Page Content -->
                    <main class="p-2">
                        {{ $slot }}
                    </main>
                </div>
            </section>

        </div>
    </body>

</html>
