<x-auth-layout>
    <x-jet-authentication-card>
        <form class="card card-md" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Login to your account') }}</h2>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- <x-jet-validation-errors class="mb-3" /> --}}

                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />
                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email')" placeholder="{{ __('Enter your Email') }}" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>
                <div class="mb-2" x-data="{show:false}">
                    <x-jet-label>
                        {{ __('Password') }}
                        @if (Route::has('password.request'))
                            <span class="form-label-description">
                                <a href="{{ route('password.request') }}"
                                    tabindex="-1">{{ __('Forgot your password?') }}</a>
                            </span>
                        @endif
                    </x-jet-label>
                    <div class="input-group input-group-flat {{ $errors->has('password') ? 'is-invalid' : '' }}">
                        <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            x-bind:type="show ? 'text' : 'password'" name="password"
                            placeholder="{{ __('Password') }}" required autocomplete="current-password" />
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="{{ __('Show password') }}"
                                x-on:click="show = !show" tabindex="-1">
                                <x-tablericon-eye-off x-bind:class="{'d-none': !show, 'd-block':show }" />
                                <x-tablericon-eye x-bind:class="{'d-none':show, 'd-block':!show }" />
                            </a>
                        </span>
                        <x-jet-input-error for="password"></x-jet-input-error>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="form-check-label">{{ __('Remember Me') }}</span>
                    </label>
                </div>
                <div class="form-footer">
                    <x-jet-button class="btn-primary w-100">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </div>
            @if (JoelButcher\Socialstream\Socialstream::show())
                <x-socialstream-providers />
            @endif
        </form>
        @if (Route::has('register'))
            <div class="text-center text-muted mt-3">
                {{ __('Don\'t have an account yet?') }} <a href="{{ route('register') }}"
                    tabindex="-1">{{ __('Sign up') }}</a>
            </div>
        @endif
    </x-jet-authentication-card>
</x-auth-layout>
