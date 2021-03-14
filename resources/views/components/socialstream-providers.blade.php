<div class="hr-text">{{ __('Or') }}</div>

<div class="card-body">
    <div class="row">
        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('github'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'github']) }}">
                    <x-github-icon />
                    {{ __('Login with Github') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('discord'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'discord']) }}">
                    <x-discord-icon />
                    {{ __('Login with Discord') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('twitter'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'twitter']) }}">
                    <x-twitter-icon />
                    {{ __('Login with Twitter') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('facebook'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'facebook']) }}">
                    <x-facebook-icon />
                    {{ __('Login with Facebook') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('google'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'google']) }}">
                    <x-google-icon />
                    {{ __('Login with Google') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('linkedin'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'linkedin']) }}">
                    <x-linked-in-icon />
                    {{ __('Login with LinkedIn') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('gitlab'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['provider' => 'gitlab']) }}">
                    <x-gitlab-icon />
                    {{ __('Login with GitLab') }}
                </a>
            </div>
        @endif

        @if (JoelButcher\Socialstream\Socialstream::hasSupportFor('linkedin'))
            <div class="col">
                <a class="btn btn-white w-100" href="{{ route('oauth.redirect', ['bitbucket' => 'bitbucket']) }}">
                    <x-bitbucket-icon />
                    {{ __('Login with Bitbucket') }}
                </a>
            </div>
        @endif
    </div>
</div>
