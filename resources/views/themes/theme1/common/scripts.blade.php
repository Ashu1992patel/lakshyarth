<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('themes/theme1/lib/easing/easing.min.js') }}"></script>
<script src="{{ url('themes/theme1/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ url('themes/theme1/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ url('themes/theme1/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ url('themes/theme1/js/main.js') }}"></script>

<!-- Loader -->
<script>
    $(window).on('load', function() {
        setTimeout(() => {
            $('#loading').hide();
        }, 1500)
    });
</script>
<!-- toastr notification -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            // "positionClass": "toast-bottom-full-width",
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        @if (session()->has('error'))
            toastr.error('{{ session()->get('error') }}');
        @elseif (session()->has('success'))
            toastr.success('{{ session()->get('success') }}');
        @elseif (session()->has('info'))
            toastr.info('{{ session()->get('info') }}');
        @elseif (session()->has('warning'))
            toastr.warning('{{ session()->get('warning') }}');
        @elseif (session()->has('message'))
            toastr.warning('{{ session()->get('message') }}');
        @endif
    });
</script>

@yield('scripts')
