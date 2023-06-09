 <!-- Footer Start -->
 <div class="container-fluid bg-footer bg-primary text-white mt-5">
     <div class="container">
         <div class="row gx-5">
             <div class="col-lg-8 col-md-6 col-sm-12">
                 <div class="row gx-5">
                     <div class="col-lg-4 col-md-12 pt-5 mb-5">
                         <h4 class="text-white mb-4">
                             Get In Touch
                         </h4>
                         <div class="d-flex mb-2">
                             <i class="bi bi-geo-alt text-white me-2"></i>
                             <p class="text-white mb-0">
                                 {{ session('settings')->address ?? '-' }}
                             </p>
                         </div>
                         <div class="d-flex mb-2">
                             <i class="bi bi-envelope-open text-white me-2"></i>
                             <p class="text-white mb-0">
                                 {{ session('settings')->email ?? '-' }}
                             </p>
                         </div>
                         <div class="d-flex mb-2">
                             <i class="bi bi-telephone text-white me-2"></i>
                             <p class="text-white mb-0"
                                 href="tel: {{ session()->has('settings') ? session('settings')->contact_primary : '-' }}">
                                 <a href="tel: {{ session()->has('settings') ? session('settings')->contact_primary : '-' }}"
                                     style="color: #fffffa">
                                     {{ session()->has('settings') ? session('settings')->contact_primary : '-' }}
                                 </a>
                             </p>
                         </div>
                         @if (session()->has('settings') && session('settings')->contact_secondary)
                             <div class="d-flex mb-2">
                                 <i class="bi bi-telephone text-white me-2"></i>
                                 <p class="text-white mb-0">
                                     <a href="tel: {{ session('settings')->contact_secondary ?? '-' }}"
                                         style="color: #fffffa">
                                         {{ session('settings')->contact_secondary ?? '-' }}
                                     </a>
                                 </p>
                             </div>
                         @endif

                         <div class="d-flex mt-4">
                             <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                     class="fab fa-twitter"></i></a>
                             <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                     class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-secondary btn-square rounded-circle" href="#"><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                         <h4 class="text-white mb-4">Quick Links</h4>
                         <div class="d-flex flex-column justify-content-start">
                             <a class="text-white mb-2" href="{{ url('/') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Home
                             </a>
                             <a class="text-white mb-2" href="{{ url('about') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 About Us
                             </a>
                             <a class="text-white mb-2" href="{{ url('services') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Our Services
                             </a>
                             <a class="text-white mb-2" href="{{ url('products') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Meet The Team
                             </a>
                             <a class="text-white mb-2" href="{{ url('blogs') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Latest Blog
                             </a>
                             <a class="text-white" href="{{ url('contact') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Contact Us
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                         <h4 class="text-white mb-4">Popular Links</h4>
                         <div class="d-flex flex-column justify-content-start">
                             <a class="text-white mb-2" href="{{ url('/') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Home
                             </a>
                             <a class="text-white mb-2" href="{{ url('about') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 About Us
                             </a>
                             <a class="text-white mb-2" href="{{ url('services') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Our Services
                             </a>
                             <a class="text-white mb-2" href="{{ url('products') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Meet The Team
                             </a>
                             <a class="text-white mb-2" href="{{ url('blogs') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Latest Blog
                             </a>
                             <a class="text-white" href="{{ url('login') }}">
                                 <i class="bi bi-arrow-right text-white me-2"></i>
                                 Login
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-n5">
                 <div
                     class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                     <h4 class="text-white">
                         Newsletter
                     </h4>
                     <h6 class="text-white">
                         Subscribe Our Newsletter
                     </h6>
                     <p>
                         {{-- Amet justo diam dolor rebum lorem sit stet sea justo kasd --}}
                     </p>
                     <form action="{{ route('news_letters.subscribe') }}" method="post">
                         @csrf
                         @method('post')
                         <div class="input-group">
                             <input type="text" class="form-control border-white p-3" placeholder="Your Email"
                                 type="email" name="email" id="email">
                             <button class="btn btn-primary">Subscribe</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="container-fluid bg-dark text-white py-4">
     <div class="container text-center">
         <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="{{ url('/') }}">
                 {{-- Your Site Name --}}
                 {{ request()->getHost() }}
             </a>. All Rights Reserved. Handled by
             <a class="text-secondary fw-bold" href="{{ url('/') }}">
                 {{ session()->has('settings') ? session('settings')->company_full_name : '-' }}
             </a>
         </p>
     </div>
 </div>
 <!-- Footer End -->
