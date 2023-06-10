<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex d-lg-none">
        <h1 class="m-0 display-4 text-secondary">

            @if (session()->has('settings'))
                <img src="{{ url(session('settings')->logo ?? 'logo.png') }}" alt="Logo" width="45px">
            @else
                <span class="text-white">
                    Ghunsaur
                    {{-- Ghunsaur Farmer --}}
                </span>
                Farmer
                {{-- Producer Company Ltd. --}}
            @endif
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link  {{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ url('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">
                About
            </a>
            <a href="{{ url('services') }}" class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}">
                Service
            </a>
            <a href="{{ url('products') }}" class="nav-item nav-link {{ request()->is('products') ? 'active' : '' }}">
                Product
            </a>
            <a href="{{ url('blogs') }}" class="nav-item nav-link {{ request()->is('blogs') ? 'active' : '' }}">
                Blogs
            </a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="team.html" class="dropdown-item">The Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div> --}}

            <a href="{{ url('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">
                Contact
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
