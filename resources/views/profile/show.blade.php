<x-app-layout>
    <x-slot name="header">
        <div class="page-pretitle">
            {{ Auth::user()->name }}
        </div>
        <h2 class="page-title">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()) && !is_null($user->password))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @else
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.set-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication() && !is_null($user->password))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (JoelButcher\Socialstream\Socialstream::show())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.connected-accounts-form')
                </div>
            @endif


            @if (!is_null($user->password))
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            @endif

            @if (!is_null($user->password))
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
