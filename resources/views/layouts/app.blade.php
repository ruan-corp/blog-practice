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

<body class="font-sans antialiased bg-slate-200 h-screen min-h-screen ">
    {{-- Notification Message --}}
    <x-js.notification />

    {{-- Main content container --}}
    <div class="flex  h-full">
        {{-- Side Menu --}}
        @include('layouts.components.side-menu')

        <!-- Page Content -->
        <section class="p-4 overflow-y-auto w-full">
            {{ $slot }}
        </section>
    </div>
</body>

</html>
