<footer class="footer footer-transparent d-print-none">
    <div class="container">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                    @if (Route::has('imprint.show'))
                        <li class="list-inline-item">
                            <a href="{{ route('imprint.show') }}" class="link-secondary">{{ __('Imprint') }}</a>
                        </li>
                    @endif

                    @if (Route::has('terms.show'))
                        <li class="list-inline-item">
                            <a href="{{ route('terms.show') }}" class="link-secondary">{{ __('ToS') }}</a>
                        </li>
                    @endif

                    @if (Route::has('policy.show'))
                        <li class="list-inline-item">
                            <a href="{{ route('policy.show') }}" class="link-secondary">{{ __('Privacy') }}</a>
                        </li>
                    @endif

                    @if (env('GITHUB_URL') !== null)
                        <li class="list-inline-item"><a href="{{ env('GITHUB_URL') }}" target="_blank"
                                class="link-secondary" rel="noopener">
                                <x-tablericon-brand-github /> Github
                            </a></li>
                    @endif
                </ul>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright © {{ date('Y') }}
                        <a href="." class="link-secondary">{{ config('app.name', 'Laravel') }}</a>.
                        All rights reserved.
                    </li>
                    @if (env('VERSION') !== null)
                        <li class="list-inline-item">
                            {{ env('VERSION') }}
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
