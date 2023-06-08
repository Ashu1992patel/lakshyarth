<!DOCTYPE html>
<html lang="en">

<head>
    @include('themes.theme1.common.head')
</head>

<body>
    <!-- Topbar Start -->
    @include('themes.theme1.common.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('themes.theme1.common.navbar')
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    @include('themes.theme1.common.footer')
    <!-- Footer End -->

    <!-- Back to Top Start -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>
    <!-- Back to Top End -->

    @include('themes.theme1.common.scripts')
</body>

</html>
