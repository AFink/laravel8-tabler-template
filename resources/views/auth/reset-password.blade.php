<x-auth-layout>
    <x-jet-authentication-card>
        <form class="card card-md" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Password Reset') }}</h2>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- <x-jet-validation-errors class="mb-3" /> --}}

                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email', $request->email)" placeholder="{{ __('Enter your Email') }}" required />
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
                                x-on:click="show = !show" data-bs-toggle="tooltip">
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
                                x-on:click="show = !show" data-bs-toggle="tooltip">
                                <x-tablericon-eye-off x-bind:class="{'d-none': !show, 'd-block':show }" />
                                <x-tablericon-eye x-bind:class="{'d-none':show, 'd-block':!show }" />
                            </a>
                        </span>
                    </div>
                </div>
                <div class="form-footer">
                    <x-jet-button class="btn-primary w-100">
                        {{ __('Reset Password') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-auth-layout>
