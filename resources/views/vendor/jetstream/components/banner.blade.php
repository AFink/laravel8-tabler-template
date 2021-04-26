@props(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')])

@push('scripts')
    <script>
        let style = '{{ $style }}';
        let message = '{{ $message }}';

        const Toast = window.Swal.mixin({
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

        if (message) {
            Toast.fire({
                icon: style,
                title: message
            })
        }

        document.addEventListener('banner-message', event => {
            style = event.detail.style;
            message = event.detail.message;
            Toast.fire({
                icon: style,
                title: message
            })
        });

    </script>
@endpush
