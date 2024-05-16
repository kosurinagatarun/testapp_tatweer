<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tatweer">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('storage/app/public/assets/tatweer-img/favicon.webp') }}">
    <!-- Site Title -->
    <title>Tatweer - Design, Development, Marketing</title>
    <link rel="stylesheet" href="{{ asset('storage/app/public/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/app/public/assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/app/public/assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/app/public/assets/css/plugins/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/app/public/assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/app/public/assets/css/style.css') }}">
</head>

<body>
    {{-- <div class="cs-preloader cs-center">
        <div class="cs-preloader_in"></div>
    </div> --}}
    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
        <div class="cs-main_header">
            <div class="container">
                <div class="cs-main_header_in">
                    <div class="cs-main_header_left">
                        <a class="cs-site_branding" href="{{ url('/') }}">
                            <img src="{{ asset('storage/app/public/assets/tatweer-img/tatweer_logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="cs-main_header_center">
                        <div class="cs-nav cs-primary_font cs-medium">
                            <ul class="cs-nav_list">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}">About</a>
                                </li>
                                <li class="menu-item-has-children cs-mega_menu">
                                    <a href="#">Services</a>
                                    <ul class="cs-mega_wrapper">
                                        <li>
                                            <ul>
                                                <li>
                                                    <h6>Design</h6>
                                                    <a href="{{ url('ui_ux') }}">UI/UX</a>
                                                    <a href="#">Graphic</a>
                                                    <a href="#">Branding</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <h6>Development</h6>
                                                    <a href="{{ url('web_development') }}">Web Development</a>
                                                    <a href="#">Web Applications</a>
                                                    <a href="#">Mobile Applications</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <h6>Marketing</h6>
                                                    <a href="#">Search Engine Optimization</a>
                                                    <a href="#">Social Media Marketing</a>
                                                    <a href="#">Digital Marketing</a>
                                                    <a href="#">Lead Generation</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <h6>Production</h6>
                                                    <a href="#">Media</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <h6>Planning and Organizing</h6>
                                                    <a href="#">Exhibitions</a>
                                                    <a href="#">Events</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('contact-us') }}">Contact</a>
                                </li>
                            </ul>
                            <a href="{{ url('contact-us') }}" class="btn let-btn">Let's Talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Add your body content here -->
    <main>

        @yield('content')

    </main>

    <!-- Start Footer -->
    <footer class="cs-fooer">
        <div class="cs-fooer_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="cs-footer_item">
                            <div class="cs-text_widget">
                                <a href="{{ url('/') }}"><img src="storage/app/public/assets/tatweer-img/tatweer_logo.png"
                                        alt="Footer_Logo"></a>
                                <p>Transforming Digital Landscapes. Based in Dubai, we specialize in SEO, web and app
                                    development, and
                                    digital marketing, focusing on innovative strategies to boost your business’s online
                                    presence.</p>
                            </div>
                            <div class="cs-social_btns cs-style1">
                                <a href="#" class="cs-center">
                                    <svg width="14" height="13" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 155.139 155.139"
                                        style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
                                        <g>
                                            <path id="f_1_" style="fill:#fff;" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
  c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
  v20.341H37.29v27.585h23.814v70.761H89.584z" />
                                        </g>

                                    </svg>
                                </a>
                                <a href="#" class="cs-center">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.04799 13.7497H1.45647V5.4043H4.04799V13.7497ZM2.75084 4.2659C1.92215 4.2659 1.25 3.57952 1.25 2.75084C1.25 2.35279 1.40812 1.97105 1.68958 1.68958C1.97105 1.40812 2.35279 1.25 2.75084 1.25C3.14888 1.25 3.53063 1.40812 3.81209 1.68958C4.09355 1.97105 4.25167 2.35279 4.25167 2.75084C4.25167 3.57952 3.57924 4.2659 2.75084 4.2659ZM13.7472 13.7497H11.1613V9.68722C11.1613 8.71903 11.1417 7.4774 9.81389 7.4774C8.46652 7.4774 8.26004 8.5293 8.26004 9.61747V13.7497H5.67132V5.4043H8.15681V6.54269H8.19308C8.53906 5.887 9.38421 5.19503 10.6451 5.19503C13.2679 5.19503 13.75 6.92215 13.75 9.16546V13.7497H13.7472Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a href="#" class="cs-center">
                                    <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4651 2.95396C11.4731 3.065 11.4731 3.17606 11.4731 3.2871C11.4731 6.67383 8.89535 10.5761 4.18402 10.5761C2.73255 10.5761 1.38421 10.1557 0.25 9.42608C0.456226 9.44986 0.654494 9.4578 0.868655 9.4578C2.06629 9.4578 3.16879 9.0533 4.04918 8.36326C2.92291 8.33946 1.97906 7.60183 1.65386 6.5866C1.81251 6.61038 1.97112 6.62624 2.1377 6.62624C2.36771 6.62624 2.59774 6.59451 2.81188 6.53901C1.63802 6.30105 0.757595 5.26996 0.757595 4.02472V3.99301C1.09864 4.18336 1.49524 4.30233 1.91558 4.31818C1.22554 3.85814 0.773464 3.07294 0.773464 2.1846C0.773464 1.70872 0.900344 1.27249 1.12244 0.891774C2.38355 2.44635 4.27919 3.46156 6.40481 3.57262C6.36516 3.38226 6.34136 3.184 6.34136 2.9857C6.34136 1.57388 7.4835 0.423828 8.90323 0.423828C9.64086 0.423828 10.3071 0.733156 10.7751 1.23284C11.354 1.1218 11.9093 0.907643 12.401 0.614185C12.2106 1.20906 11.8061 1.70875 11.2748 2.02598C11.7903 1.97049 12.29 1.82769 12.75 1.62942C12.4011 2.13702 11.9648 2.5891 11.4651 2.95396V2.95396Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a href="#" class="cs-center">
                                    <svg width="13" height="9" viewBox="0 0 13 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.4888 1.48066C12.345 0.939353 11.9215 0.513038 11.3837 0.368362C10.4089 0.105469 6.5 0.105469 6.5 0.105469C6.5 0.105469 2.59116 0.105469 1.61633 0.368362C1.07853 0.513061 0.65496 0.939353 0.5112 1.48066C0.25 2.4618 0.25 4.50887 0.25 4.50887C0.25 4.50887 0.25 6.55595 0.5112 7.53709C0.65496 8.0784 1.07853 8.48695 1.61633 8.63163C2.59116 8.89452 6.5 8.89452 6.5 8.89452C6.5 8.89452 10.4088 8.89452 11.3837 8.63163C11.9215 8.48695 12.345 8.0784 12.4888 7.53709C12.75 6.55595 12.75 4.50887 12.75 4.50887C12.75 4.50887 12.75 2.4618 12.4888 1.48066V1.48066ZM5.22158 6.36746V2.65029L8.48861 4.50892L5.22158 6.36746V6.36746Z"
                                            fill="white" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-sm-12">
                        <div class="cs-footer_item">
                            <h2 class="cs-widget_title">Services</h2>
                            <div class="d-flex mobile-s-links">
                                <ul class="cs-menu_widget cs-mp0">
                                    <li>
                                        <a href="ui_ux.html">UI/UX Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Graphic Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Branding</a>

                                    </li>
                                    <li>
                                        <a href="web_development.html">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="">Web Applications</a>

                                    </li>
                                    <li>
                                        <a href="">Mobile Applications</a>
                                    </li>
                                    <li>
                                        <a href="">Digital Marketing</a>

                                    </li>

                                </ul>
                                <ul class="cs-menu_widget cs-mp0 pl-14 ppt-5">
                                    <li>
                                        <a href="#">Search Engine Optimization</a>
                                    </li>
                                    <li>
                                        <a href="">Social Media Marketing</a>

                                    </li>

                                    <li>
                                        <a href="">Lead Generation</a>

                                    </li>
                                    <li>
                                        <a href="#">Media Production</a>

                                    </li>

                                    <li>
                                        <a href="#">Exhibitions Planning and Oranizing</a>

                                    </li>
                                    <li>
                                        <a href="">Events Planning and Oranizing</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="cs-footer_item">
                            <h2 class="cs-widget_title">Contact Us</h2>
                            <ul class="cs-menu_widget cs-mp0">
                                <li>123 Sheikh Zayed Road, Dubai, United Arab Emirates</li>
                                <li>(+971) 123 4567890</li>
                                <li>hello@tatweer.com</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="cs-bottom_footer">
                <div class="cs-bottom_footer_left">
                    <div class="cs-copyright">Copyright © 2023 Tatweer.</div>
                </div>
                <div class="cs-bottom_footer_right">
                    <ul class="cs-footer_links cs-mp0">
                        <li>
                            <a href="">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Whatsapp Floating-->
    <a href="#" class="float" target="_blank">
        <i class="fa-brands fa-whatsapp my-float"></i>
    </a>
    <!-- Whatsapp Floating-->
    <span class="cs-scrollup">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z"
                fill="currentColor" />
        </svg>
    </span>

    <!-- Script -->
    <script src="{{ asset('storage/app/public/assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('storage/app/public/assets/js/plugins/isotope.pkg.min.js') }}"></script>
    <script src="{{ asset('storage/app/public/assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('storage/app/public/assets/js/plugins/jquery.counter.min.js') }}"></script>
    <script src="{{ asset('storage/app/public/assets/js/plugins/lightgallery.min.js') }}"></script>
    <script src="{{ asset('storage/app/public/assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('storage/app/public/assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('storage/app/public/assets/js/main.js') }}"></script>
</body>

</html>