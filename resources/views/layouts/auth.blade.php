<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFA Futsal | {{ $title }}</title>

    {{-- Vite Autoreload : Start --}}
    @vite('resources/js/app.js', 'resources/css/app.css')
    {{-- Vite Autoreload : End --}}

    {{-- Core Styling : Start --}}
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/app.css') }}">
    
    @if ($title !== "Jadwal")
        <link rel="stylesheet" href="{{ asset('assets/compiled/css/app-dark.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('assets/compiled/css/iconly.css') }}">
    {{-- Core Styling : End --}}

    {{-- Styling : Start --}}
    <link rel="stylesheet" href="assets/extensions/@fortawesome/fontawesome-free/css/all.min.css">
    {{-- Styling : End --}}

    {{-- Custom styling per page : Start --}}
    @yield('styling')
    {{-- Custom styling per page : End --}}

</head>

<body>

    {{-- Script Init Theme JS --}}
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    {{-- Script Init Theme JS --}}

    <div id="app">
        <div id="main" class="layout-horizontal">

            {{-- Content : Start --}}
            @yield('content')
            {{-- Content : End --}}

        </div>
    </div>

    {{-- Javascript Core : Start --}}
    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>
    <script src="{{ asset('assets/static/js/components/dark.js')}}"></script>
    <script src="{{ asset('assets/static/js/pages/horizontal-layout.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    {{-- Javascript Core : End --}}

    {{-- Javascript included : Start --}}
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/static/js/pages/dashboard.js') }}"></script>
    {{-- Javascript included : End --}}

    {{-- Custom JS : Start --}}
    @yield('script')
    {{-- Custom JS : End --}}

</body>

</html>
