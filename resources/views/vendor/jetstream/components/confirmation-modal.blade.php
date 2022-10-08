@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex justify-content-start">
                <div class="mr-3">
                    <div class="bg-warning p-2 rounded-circle">
                        <x-tablericon-alert-triangle width="24" />
                    </div>
                </div>
                <div>
                    <h5 class="font-weight-bold">{{ $title }}</h5>
                    {{ $content }}
                </div>
            </div>
        </div>
        <div class="modal-footer bg-light">
            {{ $footer }}
        </div>
    </div>
</x-jet-modal>
