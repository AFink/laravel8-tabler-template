<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="font-sans antialiased bg-light">
    <x-jet-banner />
    <!-- Swup Container -->
    <div class="page" id="swup">
        @include('components.navigation-menu')

        <div class="content">
            <div class="container-xl">
                <!-- Page Heading -->
                @if ($header ?? false)
                    <div class="page-header text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                {{ $header }}
                            </div>
                            @if ($headerbtns ?? false)
                                <div class="col-auto ms-auto">
                                    <div class="btn-list">
                                        {{ $headerbtns }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
            @include('components.footer')
        </div>
    </div>

    @stack('modals')

    <!-- Scripts -->
    @livewireScripts

    <script src="{{ mix('js/app.js') }}" ></script>

    @stack('scripts')
</body>

</html>
