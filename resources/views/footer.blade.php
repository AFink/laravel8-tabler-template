<footer class="footer footer-transparent d-print-none">
    <div class="container">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a>
                    </li>
                    <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                    @if (env('GITHUB_URL') !== null)
                        <li class="list-inline-item"><a href="{{ env('GITHUB_URL') }}" target="_blank"
                                class="link-secondary" rel="noopener">
                                <x-github-icon /> Github
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
