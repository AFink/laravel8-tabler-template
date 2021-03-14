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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    x-bind:class="{'d-none':show, 'd-block':!show }" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path
                                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off"
                                    x-bind:class="{'d-none': !show, 'd-block':show }" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="3" y1="3" x2="21" y2="21" />
                                    <path d="M10.584 10.587a2 2 0 0 0 2.828 2.83" />
                                    <path
                                        d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341" />
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    x-bind:class="{'d-none':show, 'd-block':!show }" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path
                                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off"
                                    x-bind:class="{'d-none': !show, 'd-block':show }" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="3" y1="3" x2="21" y2="21" />
                                    <path d="M10.584 10.587a2 2 0 0 0 2.828 2.83" />
                                    <path
                                        d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341" />
                                </svg>
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
        </form>
        @if (Route::has('login'))
            <div class="text-center text-muted mt-3">
                {{ __('Already registered?') }}
                <a href="{{ route('login') }}" tabindex="-1">{{ __('Login') }}</a>
            </div>
        @endif
    </x-jet-authentication-card>
</x-auth-layout>
