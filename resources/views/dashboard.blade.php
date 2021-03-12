<x-app-layout>
    <x-slot name="header">
        <div class="page-pretitle">
            {{ __('Overview') }}
        </div>
        <h2 class="page-title">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-jet-welcome />
</x-app-layout>
