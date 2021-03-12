<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="font-sans antialiased bg-light">
    <x-jet-banner />
    @livewire('navigation-menu')

    <!-- Swup Container -->
    <div id="swup">
        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    <!-- Scripts -->
    @livewireScripts

    <script src="{{ mix('js/app.js') }}" defer></script>

    @stack('scripts')
</body>

</html>