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


    <link
        href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700&display=swap"
        rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script
        src="https://kit.fontawesome.com/2ff32adba9.js"
        crossorigin="anonymous"
    ></script>
</head>

<body class="bg-slate-200 h-screen min-h-screen ">
    {{-- Notification Message --}}
    <x-js.notification />

    {{-- Main content container --}}
    <div class="flex  h-full">
        {{-- Side Menu --}}
        @include('layouts.components.side-menu')

        <!-- Page Content -->
        <section class="p-2 overflow-y-auto w-full">
            {{ $slot }}
        </section>
    </div>
</body>


<script
    src="{{ asset('js/confirm-delete.js') }}"
    defer
></script>

</html>
