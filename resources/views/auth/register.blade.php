<x-auth-layout>
    <x-jet-authentication-card>
        <form class="card card-md" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Create a new account') }}</h2>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- <x-jet-validation-errors class="mb-3" /> --}}

                <div class="mb-3">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                        :value="old('name')" placeholder="{{ __('Enter your name') }}" required autofocus
                        autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email')" placeholder="{{ __('Enter your Email') }}" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>
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
                <div class="mb-3" x-data="{show:false}">
                    <x-jet-label value="{{ __('Confirm Password') }}" />
                    <div class="input-group input-group-flat">
                        <x-jet-input class="form-control" type="password" name="password_confirmation" required
                            x-bind:type="show ? 'text' : 'password'" placeholder="{{ __('Confirm Password') }}"
                            autocomplete="new-password" />
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="{{ __('Show password') }}"
                                x-on:click="show = !show" tabindex="-1">
                                <x-tablericon-eye-off x-bind:class="{'d-none': !show, 'd-block':show }" />
                                <x-tablericon-eye x-bind:class="{'d-none':show, 'd-block':!show }" />
                            </a>
                        </span>
                    </div>
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <label class="form-check">
                            <x-jet-checkbox id="terms" name="terms" />
                            <span class="form-check-label">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" tabindex="-1">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" tabindex="-1">' . __('Privacy Policy') . '</a>',
]) !!}
                            </span>
                        </label>
                    </div>
                @endif
                <div class="form-footer">
                    <x-jet-button class="btn-primary w-100">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>
            @if (JoelButcher\Socialstream\Socialstream::show())
                <x-socialstream-providers />
            @endif
        </form>
        @if (Route::has('login'))
            <div class="text-center text-muted mt-3">
                {{ __('Already registered?') }}
                <a href="{{ route('login') }}" tabindex="-1">{{ __('Login') }}</a>
            </div>
        @endif
    </x-jet-authentication-card>
</x-auth-layout>
