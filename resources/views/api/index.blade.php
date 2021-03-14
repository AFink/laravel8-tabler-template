<x-app-layout>
    <x-slot name="header">
        <div class="page-pretitle">
            {{ __('API') }}
        </div>
        <h2 class="page-title">
            {{ __('API Tokens') }}
        </h2>
    </x-slot>

    <div class="form-list">
        @livewire('api.api-token-manager')
    </div>
</x-app-layout>
