<x-error-layout>
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">503</div>
                <p class="empty-title">{{ __('Temporarily down for maintenance') }}</p>
                <p class="empty-subtitle text-muted">
                    {{ __('Sorry for the inconvenience but we’re performing some maintenance at the moment. We’ll be back online shortly!') }}
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
