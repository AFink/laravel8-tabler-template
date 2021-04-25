<x-auth-layout>
    <x-jet-authentication-card>
        <form class="card card-md" method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Password Confirmation') }}</h2>
                <div class="text-muted mb-4">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>

                {{-- <x-jet-validation-errors class="mb-3" /> --}}

                <div class="mb-3" x-data="{show:false}">
                    <x-jet-label value="{{ __('Password') }}" />
                    <div class="input-group input-group-flat {{ $errors->has('password') ? 'is-invalid' : '' }}">
                        <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                            name="password" required x-bind:type="show ? 'text' : 'password'"
                            placeholder="{{ __('Password') }}" autocomplete="new-password" />
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="{{ __('Show password') }}"
                                x-on:click="show = !show" tabindex="-1">
                                <x-tablericon-eye-off x-bind:class="{'d-none': !show, 'd-block':show }" />
                                <x-tablericon-eye x-bind:class="{'d-none':show, 'd-block':!show }" />
                            </a>
                        </span>
                    </div>
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-footer">
                    <x-jet-button class="btn-primary w-100">
                        {{ __('Confirm') }}
                    </x-jet-button>
                </div>
            </div>
        </form>

            <div class="text-center text-muted mt-3">
                {{ __('Nevermind, go') }}
                <a href="javascript:history.back()">{{ __('back') }}</a>@if (Route::has('logout')) {{ __('or') }} <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();" data-no-swup>Logout</a>@endif.
                <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
    </x-jet-authentication-card>
</x-auth-layout>
