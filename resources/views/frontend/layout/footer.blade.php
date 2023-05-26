<!--  footer -->
<footer id="contact">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <form method="post" id="request" class="main_form" {{ route('contact') }}>
                        @csrf
                        <div class="row">
                            <div class="col-md-3 ">
                                <input class="contactus" placeholder="Full Name" type="text" name="name"
                                    id="name">
                            </div>
                            <div class="col-md-3">
                                <input class="contactus" placeholder="Email" type="email" name="email"
                                    id="email">
                            </div>
                            <div class="col-md-3">
                                <input class="contactus" placeholder="Phone Number" type="tel" name="contact"
                                    id="contact">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <textarea class="contactus1" placeholder="Message" name="message" id="message">Message </textarea>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 border_right">
                    <ul class="location_icon">
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </a>
                            Jabalpur, MP
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </a>
                            +91-9144444124
                        </li>
                        <li>
                            <a href="mailto: help@lakshyarth.com">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            help@lakshyarth.com
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 border_right">
                    <h3>Useful Link</h3>
                    <ul class="link">
                        <li><a href="#">humour, or </a></li>
                        <li><a href="#">randomised words </a> </li>
                        <li><a href="#">which don't look </a></li>
                        <li><a href="#">even slightly </a> </li>
                        <li><a href="#">believable. If </a></li>
                    </ul>
                </div>
                <div class="col-md-3 border_right">
                    <h3>Menus</h3>
                    <ul class="link">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">
                            subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Copyright 2019 All Right Reserved By
                            <a href="https://lakshyarth.com/">
                                Lakshyarth Foordgrain
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--  end footer -->
