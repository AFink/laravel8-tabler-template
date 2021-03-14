<x-app-layout>
    <x-slot name="header">
        <div class="page-pretitle">
            {{ $team->name }}
        </div>
        <h2 class="page-title">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="form-list">
        @livewire('teams.update-team-name-form', ['team' => $team])

        @livewire('teams.team-member-manager', ['team' => $team])

        @if (Gate::check('delete', $team) && !$team->personal_team)
            <x-jet-section-border />

            <div>
                @livewire('teams.delete-team-form', ['team' => $team])
            </div>
        @endif
    </div>
</x-app-layout>
