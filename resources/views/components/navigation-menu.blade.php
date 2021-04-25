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
                            aria-label="Open team menu">


                            <div>{{ Auth::user()->currentTeam->name }}</div>
                            <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>

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
                        aria-label="Open user menu">
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
                            {{ __('Log out') }}
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
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Dashboard
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
                                <input type="text" class="form-control form-control-dark" placeholder="Search…"
                                    aria-label="Search in website">
                            </div>
                        </form>
                    </div> -->
            </div>
        </div>
    </div>
</nav>
