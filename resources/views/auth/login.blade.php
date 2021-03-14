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
                                <a href="{{ route('password.request') }}" tabindex="-1">{{ __('Forgot your password?') }}</a>
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
            {{-- <div class="hr-text">or</div>
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-white w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                            </svg>
                            Login with Github
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-white w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                            </svg>
                            Login with Twitter
                        </a>
                    </div>
                </div>
            </div> --}}
        </form>
        @if (Route::has('register'))
            <div class="text-center text-muted mt-3">
                {{ __('Don\'t have an account yet?') }} <a href="{{ route('register') }}"
                    tabindex="-1">{{ __('Sign up') }}</a>
            </div>
        @endif
    </x-jet-authentication-card>
</x-auth-layout>
