<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <img src="logo.png" alt="#" width="60"
                                    style="max-width: 80%;
                                height: auto; " />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('home') }}"> Home </a>
                                </li>
                                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item {{ request()->is('products') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('products') }}">Products </a>
                                </li>
                                <li class="nav-item {{ request()->is('blogs') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
                                </li>
                                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li class="nav-item d_none">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class=" d_none get_btn">
                                    <a href="#">Get a quote</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
