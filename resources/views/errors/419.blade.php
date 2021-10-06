<x-error-layout>
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">419</div>
                <p class="empty-title">{{ __('Oops… Your session has expired') }}</p>
                <p class="empty-subtitle text-muted">
                    {{ __('Please refresh and try again.') }}
                </p>
                <div class="empty-action">
                    <a href="" class="btn btn-primary">
                        <x-tablericon-refresh />
                        {{ __('Refresh page') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-error-layout>
