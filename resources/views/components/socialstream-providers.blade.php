<div class="hr-text">{{ __('Or') }}</div>

<div class="card-body">
    <div class="row">
        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('github'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'github']) }}">
                    <x-tablericon-brand-github />
                    {{ __('Login with Github') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('discord'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'discord']) }}">
                    <x-tablericon-brand-discord />
                    {{ __('Login with Discord') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('twitter'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'twitter']) }}">
                    <x-tablericon-brand-twitter />
                    {{ __('Login with Twitter') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('facebook'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'facebook']) }}">
                    <x-tablericon-brand-facebook />
                    {{ __('Login with Facebook') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('google'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'google']) }}">
                    <x-tablericon-brand-google />
                    {{ __('Login with Google') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('linkedin'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'linkedin']) }}">
                    <x-tablericon-brand-linkedin />
                    {{ __('Login with LinkedIn') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('gitlab'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'gitlab']) }}">
                    <x-tablericon-brand-gitlab />
                    {{ __('Login with GitLab') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('bitbucket'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['bitbucket' => 'bitbucket']) }}">
                    <x-tablericon-brand-bitbucket />
                    {{ __('Login with Bitbucket') }}
                </a>
            </div>
        @endif
    </div>
</div>
