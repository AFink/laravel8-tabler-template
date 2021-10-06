<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">@yield('code')</div>
                <p class="empty-title">@yield('message_title')</p>
                <p class="empty-subtitle text-muted">
                    @yield('message_subtitle')
                </p>
                <div class="empty-action">
                    <a href="{{ app('router')->has('home') ? route('home') : url('/') }}" class="btn btn-primary">
                        <x-tablericon-arrow-left />
                        {{ __('Take me home') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
