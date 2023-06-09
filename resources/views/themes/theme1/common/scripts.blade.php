<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('themes/theme1/lib/easing/easing.min.js') }}"></script>
<script src="{{ url('themes/theme1/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ url('themes/theme1/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ url('themes/theme1/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ url('themes/theme1/js/main.js') }}"></script>

<script>
    $(window).on('load', function() {
        setTimeout(() => {
            $('#loading').hide();
        }, 1500)
    });
</script>

@yield('scripts')
