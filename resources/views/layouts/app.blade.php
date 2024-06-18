<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title> @yield('title')</title>
    @yield('head-imports')

    <!-- Fonts -->
    <link
        rel="preconnect"
        href="https://fonts.bunny.net"
    >
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <section class="grid grid-cols-6 min-h-screen">
            {{-- Side Menu --}}
            <div>
                @include('layouts.components.side-menu')
            </div>

            {{-- Main content container --}}
            <div class="col-span-5 relative">
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow">
                        <div class="py-6 px-4 font-semibold text-xl text-gray-800 leading-tight">
                            <h2 class="text-xl text-center w-full">{{ $header }}</h2>
                        </div>
                    </header>
                @endisset

                {{-- Notification Message --}}
                <x-js.notification />

                <!-- Page Content -->
                <main class="p-2 overflow-y-auto main-container-height h-full">
                    {{ $slot }}
                </main>
            </div>
        </section>
    </div>
</body>


<script
    src="{{ asset('js/confirm-delete.js') }}"
    defer
></script>

</html>
