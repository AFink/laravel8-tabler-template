@props(['id', 'maxWidth', 'modal' => false])

@php
$id = $id ?? md5($attributes->wire('model'));

switch ($maxWidth ?? '') {
    case 'sm':
        $maxWidth = ' modal-sm';
        break;
    case 'md':
        $maxWidth = '';
        break;
    case 'lg':
        $maxWidth = ' modal-lg';
        break;
    case 'xl':
        $maxWidth = ' modal-xl';
        break;
    case '2xl':
    default:
        $maxWidth = '';
        break;
}
@endphp

<!-- Modal -->
<div 
    x-data="{
        show: @entangle($attributes->wire('model')),
    }"
    x-init="() => {
        let modalElement = document.getElementById('{{ $id }}');
        var body = document.querySelector('body');
        if(!window.modals){
            window.modals = [];
        }
        if(window.modals['{{ $id }}']){
            return;
        }
        window.modals['{{ $id }}'] = new Bootstrap.Modal(modalElement);
        body.appendChild(modalElement)
        $watch('show', value => {
            if (value) {
                window.modals['{{ $id }}'].show(); 
            } else {
                window.modals['{{ $id }}'].hide();  
            }
        });
        modalElement.addEventListener('hidden.bs.modal', function (event) {
            show = false;
        })
    }"
    wire:ignore.self 
    class="modal modal-blur fade" 
    tabindex="-1" 
    id="{{ $id }}" 
    aria-labelledby="{{ $id }}" 
    aria-hidden="true"
    x-ref="{{ $id }}"
>
    <div class="modal-dialog{{ $maxWidth }}">
        {{ $slot }}
    </div>
</div>
