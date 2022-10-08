<nav class="navbar navbar-expand-md navbar-dark navbar-overlap d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <x-jet-application-mark width="36" />
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                    aria-label="Show notifications">
                    <x-tablericon-bell />
                    <span class="badge bg-red"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                    <div class="card">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur
                            exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet
                            debitis et magni maxime necessitatibus ullam.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Settings Dropdown -->
            @auth
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="nav-item dropdown me-3">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="{{ __('Open team menu') }}">

                            <div>{{ Auth::user()->currentTeam->name }}</div>
                            <x-tablericon-selector class="ms-2" width="18" />

                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <!-- Team Management -->
                            <span class="dropdown-header">{{ __('Manage Team') }}</span>
                            <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="dropdown-item">
                                {{ __('Team Settings') }}
                            </a>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <a href="{{ route('teams.create') }}" class="dropdown-item">
                                    {{ __('Create New Team') }}
                                </a>
                            @endcan

                            <div class="dropdown-divider"></div>

                            <!-- Team Switcher -->
                            <span class="dropdown-header">{{ __('Switch Teams') }}</span>
                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- User Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                        aria-label="{{ __('Open user menu') }}">
                        <x-avatar :model="Auth::user()" />
                        <div class="d-none d-xl-block ps-2">
                            <div>{{ Auth::user()->name }}</div>
                            <!-- <div class="mt-1 small text-muted">UI Designer</div> -->
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <!-- Account Management -->
                        <span class="dropdown-header">{{ __('Manage Account') }}</span>
                        <a href="{{ route('profile.show') }}" class="dropdown-item">
                            {{ __('Profile') }}
                        </a>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <a href="{{ route('api-tokens.index') }}" class="dropdown-item">
                                {{ __('API Tokens') }}
                            </a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <!-- Authentication -->
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"
                            class="dropdown-item" data-no-swup>
                            {{ __('Logout') }}
                        </a>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <x-tablericon-home class="nav-link-icon d-md-none d-lg-inline-block" />
                            <span class="nav-link-title">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                    </li>
                    <!--<div
                        class="ms-md-auto ps-md-4 py-2 py-md-0 me-md-4 order-first order-md-last flex-grow-1 flex-md-grow-0" style="align-self: center;">
                        <form action="." method="get">
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                   <x-tablericon-search />
                                </span>
                                <input type="text" class="form-control form-control-dark" placeholder="{{ __('Search…') }}"
                                    aria-label="{{ __('Search in website') }}">
                            </div>
                        </form>
                    </div> -->
            </div>
        </div>
    </div>
</nav>
