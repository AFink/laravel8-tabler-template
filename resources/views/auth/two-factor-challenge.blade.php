<x-auth-layout>
    <x-jet-authentication-card>
        <form class="card card-md" method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <div class="card-body" x-data="{ recovery: false }">
                <h2 class="card-title text-center mb-4">{{ __('Two Factor Authentication') }}</h2>
                <div class="text-muted mb-4" x-show="! recovery">
                    {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                </div>

                <div class="text-muted mb-4" x-show="recovery">
                    {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                </div>

                {{-- <x-jet-validation-errors class="mb-3" /> --}}

                <div class="mb-3" x-show="! recovery">
                    <x-jet-label>
                        {{ __('Code') }}
                        <span class="form-label-description">
                            <a href="#" x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    " tabindex="-1">
                                {{ __('Use a recovery code') }}
                            </a>
                        </span>
                    </x-jet-label>

                    <x-jet-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}" type="text"
                        inputmode="numeric" name="code" autofocus x-ref="code"
                        placeholder="{{ __('Enter your Code') }}" autocomplete="one-time-code" />
                    <x-jet-input-error for="code"></x-jet-input-error>
                </div>

                <div class="mb-3" x-show="recovery">
                    <x-jet-label>
                        {{ __('Recovery Code') }}
                        <span class="form-label-description">
                            <a href="#" x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    " tabindex="-1">
                                {{ __('Use an authentication code') }}
                            </a>
                        </span>
                    </x-jet-label>

                    <x-jet-input class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}" type="text"
                        name="recovery_code" placeholder="{{ __('Enter your Recovery Code') }}" x-ref="recovery_code"
                        autocomplete="one-time-code" />
                    <x-jet-input-error for="recovery_code"></x-jet-input-error>
                </div>

                <div class="form-footer">
                    <x-jet-button class="btn-primary w-100">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-auth-layout>
