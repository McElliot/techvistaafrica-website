<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TechVistaAfrica - IT Solution & Technology</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel=" icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />

    <link href=" https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel=" stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel=" stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link rel=" stylesheet" href="{{ asset('assets/css/fontawesome.css') }}" />
    <link rel=" stylesheet" href="{{ asset('assets/css/remixicon.css') }}" />
    <link rel=" stylesheet" href="{{ asset('assets/css/aos.css') }}" />

    <link rel=" stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel=" stylesheet" href="{{ asset('assets/css/app.min.css') }}" />
</head>

<body>
    <div class=" optech-preloader-wrap">
        <div class="optech-preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- progress circle -->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
            <div class="top-arrow">
                <i class="ri-arrow-up-s-line"></i>
            </div>
        </div>
    </div>

    <header class="site-header optech-header-section site-header--menu-right optech-header-two" id="sticky-menu">
        <div class="optech-header-top dark-bg3">
            <div class="container">
                <div class="optech-header-info-wrap">
                    <div class="optech-header-info">
                        <ul>
                            <li>
                                <i class="ri-map-pin-2-fill"></i>09 George Silundika
                                Ave,Harare Brynstone House
                            </li>
                        </ul>
                    </div>
                    <div class="optech-header-info">
                        <ul>
                            <li>
                                <a href="tel:+263777743399"><i class="ri-phone-fill"></i>+263-777-743-399</a>
                            </li>
                            <li>
                                <a href="mailto:info@techvistaafrica.com"><i
                                        class="ri-mail-fill"></i>info@techvistaafrica.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="optech-header-bottom">
            <div class="container">
                <nav class="navbar site-navbar">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="{{asset('assets/images/logo/logo-white.svg')}}" alt=""
                                class="light-version-logo" />
                        </a>
                    </div>
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main light-color">
                                <li class="nav-item">
                                    <a class="nav-link-item" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-item" href="service.html">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-item" href="blog-grid.html">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-item" href="portfolio-02.html">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-item" href="contact-us.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-item" href="contact-us.html">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-item" href="faq.html">Faq</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                        <a class="optech-default-btn optech-header-btn" data-text="Get in Touch"
                            href="contact-us.html"><span class="btn-wraper">Get in Touch</span></a>
                    </div>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger light-color">
                        <span></span>
                    </div>
                    <!--/.Mobile Menu Hamburger Ends-->
                </nav>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer class="optech-footer-section dark-bg">
        <div class="container">
            <div class="optech-footer-top optech-section-padding">
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="optech-footer-textarea light-color">
                            <a href="index.html">
                                <img src="{{asset('assets/images/logo/logo-white.svg')}}" alt="" />
                            </a>
                            <p>
                                At TechVistaAfrica, we specialize in turning smart ideas into
                                practical software solutions. From startups to growing teams,
                                we build with purpose and care.
                            </p>
                            <div class="optech-social-icon-box">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/">
                                            <i class="ri-instagram-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-4">
                        <div class="optech-footer-menu">
                            <div class="optech-footer-title">
                                <h5>Quick Links</h5>
                            </div>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="portfolio-02.html">Case Studies</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-5">
                        <div class="optech-footer-menu">
                            <div class="optech-footer-title">
                                <h5>Services</h5>
                            </div>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Mobile App Development</a></li>
                                <li><a href="#">Cyber Security & IT Support</a></li>
                                <li><a href="#">Web Hosting & Domains</a></li>
                                <li><a href="#">ICT Consultancy</a></li>
                                <li><a href="#">Graphic Design & Printing</a></li>
                                <!-- <li><a href="#">Business & HR Software</a></li>
                      <li><a href="#">School Management Systems</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="optech-footer-menu mb-0">
                            <div class="optech-footer-title">
                                <h5>Information</h5>
                            </div>
                            <ul>
                                <li><a href="#">How We Work</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="optech-footer-bottom center">
                <div class="optech-copywright">
                    <p>Copyright © 2025 TechVistaAfrica. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu/menu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/skillbar.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/faq.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/tabs-slider.js') }}"></script>
    <script src="{{ asset('assets/js/product-increment.js') }}"></script>
    <script src="{{ asset('assets/js/top-to-bottom.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>