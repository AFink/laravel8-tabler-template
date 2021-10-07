<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@hasSection('title')@yield('title') | @endif{{ env('APP_NAME', 'Laravel Tabler') }}</title>

        @hasSection('robots')<meta name="robots" content="@yield('robots')">@endif

        @hasSection('description')<meta name="description" content="@yield('description')">@endif
        @hasSection('keywords')<meta name="keywords" content="@yield('keywords')">@endif

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased border-top-wide border-primary d-flex flex-column">
        {{ $slot }}
    </body>
</html>
