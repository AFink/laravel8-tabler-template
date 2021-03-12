<x-app-layout>
    <x-slot name="header">
        <div class="page-pretitle">
            {{ __('Teams') }}
        </div>
        <h2 class="page-title">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div>
        @livewire('teams.create-team-form')
    </div>
</x-app-layout>
