<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFA Admin | {{ $title }}</title>

    {{-- Vite Autoreload : Start --}}
    @vite('resources/js/app.js', 'resources/css/app.css')
    {{-- Vite Autoreload : End --}}

    {{-- Core Styling : Start --}}
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/iconly.css') }}">
    {{-- Core Styling : End --}}

    {{-- Page Styling : Start --}}
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/table-datatable.css') }}">
    {{-- Page Styling : End --}}

    {{-- Custom Styling : Start --}}
    @yield('style')
    {{-- Custom Styling : End --}}

</head>

<body>
    {{-- Javascript Static : Start --}}
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    {{-- Javascript Static : End --}}

    <div id="app">

        {{-- Sidebar : Start --}}
        @include('admin.components.sidebar.index')
        {{-- Sidebar : End --}}

        {{-- Content Wrapper : Start --}}
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            {{-- Page Header : Start --}}
            @isset($headingTitle)
                <div class="page-heading">
                    <h3>{{ $headingTitle }}</h3>
                    <hr>
                </div>
            @endisset
            {{-- Page Header : End --}}

            {{-- Content : Start --}}
            <div class="page-content">
                @yield('content')
            </div>
            {{-- Content : End --}}

            {{-- Footer : Start --}}
            @include('admin.components.footer.index')
            {{-- Footer : End --}}

        </div>
        {{-- Content Wrapper : End --}}


    </div>

    {{-- Javascript Static Core : Start --}}
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>
    {{-- Javascript Static Core : End --}}

    {{-- Javascript Extensions : Start --}}
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    {{-- Javascript Extensions : End --}}

    {{-- Javascript Page : Start --}}
    <script src="{{ asset('assets/static/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/static/js/pages/simple-datatables.js') }}"></script>
    {{-- Javascript Page : End --}}

    {{-- Custom Javascrcipt : Start --}}
    @yield('script')
    {{-- Custom Javascript : End --}}

</body>

</html>
