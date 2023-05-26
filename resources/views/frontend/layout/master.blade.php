<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    @include('frontend.layout.loader')
    <!-- end loader -->

    <!-- header -->
    @include('frontend.layout.header')
    <!-- end header inner -->
    <!-- end header -->

    @yield('frontend-content')

    <!--  footer -->
    @include('frontend.layout.footer')
    <!-- end footer -->
    
    <!-- Javascript files-->
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/popper.min.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="frontend/js/custom.js"></script>
</body>

</html>
