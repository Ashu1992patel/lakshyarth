<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
    @yield('title') -
    {{ session('settings')->company_full_name ?? 'Lakshyarth Foodgrain' }}
</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min.css') }}">

<!-- Implement a lightbox for Bootstrap gallery -->
<link rel="stylesheet" href="{{ url('backend/plugins/ekko-lightbox/ekko-lightbox.css') }}">

<!-- DataTables -->
<link rel="stylesheet" href="{{ url('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

<!-- Select2 -->
<link rel="stylesheet" href="{{ url('backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ url('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

<!-- Toastr -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<!-- Laravel Notify -->
@notifyCss
<style>
    .notify {
        align-items: flex-end !important;
    }

    #example1 {
        font-size: .9rem !important;
    }

    .select2-selection--single {
        height: 40px !important;
    }

    .error {
        color: red
    }

    #success {
        background: green;
    }

    #error {
        background: red;
    }

    #warning {
        background: coral;
    }

    #info {
        background: cornflowerblue;
    }

    #question {
        background: grey;
    }
</style>
