 <!-- Topbar Start -->
 <div class="container-fluid px-5 d-none d-lg-block" id="top">
     {{-- <div class="row gx-5 py-3 align-items-center"> --}}
     <div class="row gx-5 align-items-center">
         <div class="col-lg-3">
             <div class="d-flex align-items-center justify-content-start">
                 <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                 <h2 class="mb-0">
                     <a href="tel:{{ session('settings')->contact_primary ?? '+919144444124' }}" style="color: black">
                         {{ session('settings')->contact_primary ?? '+919144444124' }}
                     </a>
                 </h2>
             </div>
         </div>
         <div class="col-lg-6">
             <div class="d-flex align-items-center justify-content-center">
                 <a href="index.html" class="navbar-brand ms-lg-5">
                     <h1 class="m-0 display-4 text-primary">
                         @if (session('settings')->logo)
                             <img src="{{ url(session('settings')->logo ?? 'logo.png') }}" alt="Logo" width="80px"
                                 class="py-2">
                         @else
                             <span class="text-secondary">
                                 Ghunsaur
                                 {{-- Ghunsaur Farmer --}}
                             </span>
                             Farmer
                             {{-- Producer Company Ltd. --}}
                         @endif
                     </h1>
                 </a>
             </div>
         </div>
         <div class="col-lg-3">
             <div class="d-flex align-items-center justify-content-end">
                 <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                     <i class="fab fa-twitter"></i>
                 </a>
                 <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                     <i class="fab fa-facebook-f"></i>
                 </a>
                 <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                     <i class="fab fa-linkedin-in"></i>
                 </a>
                 <a class="btn btn-primary btn-square rounded-circle" href="#">
                     <i class="fab fa-instagram"></i>
                 </a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->
