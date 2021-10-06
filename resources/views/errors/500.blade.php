<x-error-layout>
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">500</div>
                <p class="empty-title">{{ __('Oops… You just found an error page') }}</p>
                <p class="empty-subtitle text-muted">
                    {{ __('We are sorry but our server encountered an internal error') }}
                </p>
                <div class="empty-action">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <x-tablericon-arrow-left />
                        {{ __('Take me home') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-error-layout>
