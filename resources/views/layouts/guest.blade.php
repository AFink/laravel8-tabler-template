<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-light font-sans antialiased" id="swup">
    <div class="row justify-content-center pt-4">
        <div class="col-6">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
