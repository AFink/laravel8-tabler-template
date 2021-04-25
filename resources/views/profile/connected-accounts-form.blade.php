<x-jet-action-section>
    <x-slot name="title">
        {{ __('Connected Accounts') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Manage and remove your connect accounts.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if (count($this->accounts) == 0)
                {{ __('You have no connected accounts.') }}
            @else
                {{ __('Your connected accounts.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            {{ __('You are free to connect any social accounts to your profile and may remove any connected accounts at any time. If you feel any of your connected accounts have been compromised, you should disconnect them immediately and change your password.') }}
        </div>

        <div class="mt-3">
            @foreach ($this->providers as $provider)
                @php
                    $account = $this->accounts->where('provider', $provider)->first();
                    $createdAt = $account ? $account->created_at : null;
                @endphp
                <div class="d-flex">
                    <div class="center">
                        @switch($provider)
                            @case('github')
                                <x-tablericon-brand-github />
                            @break
                            @case('discord')
                                <x-tablericon-brand-discord />
                            @break
                            @case('twitter')
                                <x-tablericon-brand-twitter />
                            @break
                            @case('facebook')
                                <x-tablericon-brand-facebook />
                            @break
                            @case('google')
                                <x-tablericon-brand-google />
                            @break
                            @case('linkedin')
                                <x-tablericon-brand-linkedin />
                            @break
                            @case('linkedin')
                                <x-tablericon-brand-linkedin />
                            @break
                            @case('bitbucket')
                                <x-tablericon-brand-bitbucket />
                            @break
                            @default

                        @endswitch
                    </div>

                    <div class="ms-2">
                        <div>
                            {{ __(ucfirst($provider)) }}
                        </div>

                        <div>
                            <div class="small font-weight-bold">
                                @if (!is_null($createdAt))
                                    <div class="text-success">
                                        {{ __('Connected :at', ['at' => $createdAt]) }}
                                    </div>
                                @else
                                    <div class="text-danger">
                                        {{ __('Not connected.') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="ms-auto">
                        @if ($account)
                            @if ($this->accounts->count() > 1 || !is_null($this->user->password))
                                <x-jet-button class="btn-danger" wire:click="confirmRemove({{ $account->id }})"
                                    wire:loading.attr="disabled">
                                    {{ __('Remove') }}
                                </x-jet-button>
                            @endif
                        @else
                            <a class="btn btn-success"
                                href="{{ route('oauth.redirect', ['provider' => $provider]) }}">
                                {{ __('Connect') }}
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Remove Connected Account Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingRemove">
            <x-slot name="title">
                {{ __('Remove Connected Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Please confirm your removal of this account - this action cannot be undone.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingRemove')" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="removeConnectedAccount({{ $this->selectedAccountId }})"
                    wire:loading.attr="disabled">
                    {{ __('Remove Connected Account') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
