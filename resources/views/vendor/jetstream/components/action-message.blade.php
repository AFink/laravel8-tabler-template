@props(['on'])

<div x-data="{}"
    x-init="@this.on('{{ $on }}', () => {
            var event = new CustomEvent('banner-message', { detail: {style: 'success', message: '{{ $slot->isEmpty() ? 'Saved.' : $slot }}'} });
            document.dispatchEvent(event);
      })">
</div>
