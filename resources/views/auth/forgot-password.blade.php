<x-auth-layout>
    <x-jet-authentication-card>
        <form class="card card-md" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Password Reset') }}</h2>
                <p class="text-muted mb-4">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- <x-jet-validation-errors class="mb-3" /> --}}

                <div class="mb-3">
                    <x-jet-label value="Email" />
                    <x-jet-input type="email" name="email" :value="old('email')"
                        placeholder="{{ __('Enter your Email') }}" required autofocus />
                </div>
                <div class="form-footer">
                    <x-jet-button class="btn-primary w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <polyline points="3 7 12 13 21 7" />
                        </svg>
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
        @if (Route::has('login'))
            <div class="text-center text-muted mt-3">
                {{ __('Nevermind, back to') }}
                <a href="{{ route('login') }}" tabindex="-1">{{ __('Login') }}</a>.
            </div>
        @endif
    </x-jet-authentication-card>
</x-auth-layout>
