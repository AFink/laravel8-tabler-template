@section('title', __('Create Team'))
@section('description', __('Create Team Page Description'))
@section('keywords', 'create, team')

<x-app-layout>
    <x-slot name="header">
        <div class="page-pretitle">
            {{ __('Teams') }}
        </div>
        <h2 class="page-title">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="form-list">
        @livewire('teams.create-team-form')
    </div>
</x-app-layout>
