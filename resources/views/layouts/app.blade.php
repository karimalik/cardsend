<!---
    ==============================
    Design and devbeloper by Webixcm
    Author: karimkompissi
    Email: karimkompissi@gmail.com
    ==============================
    --->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="karim kompissi">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script defer src="{{ asset('dash/assets/plugins/fontawesome/js/all.min.js') }}"></script>
    @include('sweetalert::alert')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Car<span>Send</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">

                    @auth
                    <li class="nav-item {{ Request::path() == '/' ? 'active' : ''}}">
                        <a href={{ url('/') }}" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'about-us' ? 'active' : ''}}">
                        <a href="{{ url('about-us') }}" class="nav-link">A Propos</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'booking' ? 'active' : ''}}">
                        <a href="{{ url('booking') }}" class="nav-link">Booking</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'contact' ? 'active' : ''}}">
                        <a href="{{ url('contact') }}" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'home' ? 'active' : ''}}">
                        <a href="{{ route('home') }}" class="nav-link">Dashoard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Déconnexion</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class=" nav-item {{ Request::path()=='/' ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'about-us' ? 'active' : ''}}">
                        <a href="{{ url('about-us')  }}" class="nav-link">A Propos</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'booking' ? 'active' : ''}}">
                        <a href="{{ url('booking')  }}" class="nav-link">Booking</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'contact' ? 'active' : ''}}">
                        <a href="{{ url('contact')  }}" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'login' ? 'active' : ''}}">
                        <a href="{{ route('login') }}" class="nav-link">Connexion</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item {{ Request::path() == 'register' ? 'active' : ''}}">
                        <a href="{{ route('register') }}" class="nav-link">Inscription</a>
                    </li>
                    @endif
                    @endauth

                </ul>
                @endif

            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>Send</span></a></h2>
                        <p>
                            Première plate-forme de vente et achat de voiture au <strong>Cameroun</strong>
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Liens Rapide</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}" class="py-2 d-block">Accueil</a></li>
                            <li><a href="{{ url('about-us') }}" class="py-2 d-block">A Propos</a></li>
                            <li><a href="{{ url('booking') }}" class="py-2 d-block">Booking</a></li>
                            <li><a href="{{ url('blog') }}" class="py-2 d-block">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="{{ url('contact') }}" class="py-2 d-block">Contact Us</a></li>
                            <li><a href="#" class="py-2 d-block">Condition d'utilisation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Bonamoussadi
                                        Douala, Cameroun.</span></li>
                                <li><a href="tel://+237690138873"><span class="icon icon-phone"></span><span
                                            class="text">
                                            (237) 690 138 873
                                        </span></a></li>
                                <li><a href="mailto:info@carsend.com"><span class="icon icon-envelope"></span><span
                                            class="text">info@carsend.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This website is design and develop by <a
                            href="https://webixcm.com" target="_blank">Webixcm</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{asset('assets/js/google-map.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    @yield('extra-js')
</body>

</html>
