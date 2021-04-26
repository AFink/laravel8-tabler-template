@props(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')])

@push('scripts')
    <script>
        let style = '{{ $style }}';
        let message = '{{ $message }}';

        document.addEventListener('banner-message', event => {
            window.Swal.fire({
                icon: event.detail.style,
                title: event.detail.message,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', window.Swal.stopTimer)
                    toast.addEventListener('mouseleave', window.Swal.resumeTimer)
                }
            })
        });

        if (message) {
            var event = new CustomEvent('banner-message', {
                detail: {
                    style: style,
                    message: message
                }
            });
            document.dispatchEvent(event);
        }
    </script>
@endpush
