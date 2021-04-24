@php
if (Auth::guest()) {
    $layout = 'guest-layout';
} else {
    $layout = 'app-layout';
}
@endphp

<x-dynamic-component :component="$layout" class="mt-4">
    @if ($title)
        <x-slot name="header">
            <h2 class="page-title">
                {{ $title }}
            </h2>
        </x-slot>
    @endif
    <div class="container-xl">
        <div class="card card-lg">
            <div class="card-body ">
                {!! $text !!}
            </div>
        </div>
    </div>
</x-dynamic-component>
