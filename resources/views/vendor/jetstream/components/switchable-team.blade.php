@props(['team', 'component' => 'jet-dropdown-link'])

<x-dynamic-component :component="$component" href="#" onclick="event.preventDefault();
                                                 document.getElementById('switch-team-form-{{ $team->id }}').submit();">
    <div class="d-flex align-content-center">
        @if (Auth::user()->isCurrentTeam($team))
            <x-tablericon-check height="20" width="20" class="text-success" />
        @endif

        <div>{{ $team->name }}</div>
    </div>

    <form method="POST" action="{{ route('current-team.update') }}" id="switch-team-form-{{ $team->id }}">
        @method('PUT')
        @csrf

        <!-- Hidden Team ID -->
        <input type="hidden" name="team_id" value="{{ $team->id }}">
    </form>
</x-dynamic-component>


