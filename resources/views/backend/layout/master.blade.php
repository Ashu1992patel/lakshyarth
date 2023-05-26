<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layout.head')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        @include('backend.layout.preloader')

        <!-- Navbar -->
        @include('backend.layout.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        {{-- @include('backend.layout.footer') --}}
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ url('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('backend/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ url('backend/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ url('backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('backend/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ url('backend/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('backend/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ url('backend/dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('backend/dist/js/pages/dashboard2.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ url('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('backend/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ url('backend/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- Implement a lightbox for Bootstrap gallery -->
    <script src="{{ url('backend/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>

    <!-- Toastr -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(function() {
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            // example-1
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            // example-2
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

            // example-3
            $('#example3').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    {{-- Laravel Notify --}}
    @include('notify::components.notify')
    @notifyJs

    {{-- toast notification --}}
    <script type="text/javascript">
        // Default Configuration
        $(document).ready(function() {
            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': false,
                'progressBar': false,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }
        });

        // Toast Type
        $('#success').click(function(event) {
            toastr.success('You clicked Success toast');
        });

        $('#info').click(function(event) {
            toastr.info('You clicked Info toast')
        });

        $('#error').click(function(event) {
            toastr.error('You clicked Error Toast')
        });

        $('#warning').click(function(event) {
            toastr.warning('You clicked Warning Toast')
        });

        // Toast Image and Progress Bar
        $('#image').click(function(event) {
            toastr.options.progressBar = true,
                toastr.info('<img src="https://image.flaticon.com/icons/svg/34/34579.svg" style="width:150px;">',
                    'Toast Image')
        });

        // Toast Position
        $('#position').click(function(event) {
            var pos = $('input[name=position]:checked', '#positionForm').val();
            toastr.options.positionClass = "toast-" + pos;
            toastr.options.preventDuplicates = false;
            toastr.info('This sample position', 'Toast Position')
        });
    </script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.info("{{ $error }}")

                console.log("{{ $error }}");
            </script>
        @endforeach
    @endif
</body>

</html>
