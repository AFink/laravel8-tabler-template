<x-auth-layout>
    <x-jet-authentication-card>
        <form class="card card-md" method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Email Verification') }}</h2>
                <p class="text-muted mb-4">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>

                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success" role="alert">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <div class="form-footer">
                    <x-jet-button class="btn-primary w-100">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
        @if (Route::has('logout'))
            <div class="text-center text-muted mt-3">
                {{ __('Nevermind,') }}
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();" data-no-swup>Logout</a>.
                <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endif
    </x-jet-authentication-card>
</x-auth-layout>
