<!---
    ==============================
    Design and devbeloper by Webixcm
    Author: karimkompissi
    Email: karimkompissi@gmail.com
    ==============================
    --->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="karim kompissi">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('utils/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('utils/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('utils/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('utils/css/style.css') }}">
    @include('sweetalert::alert')

    <title>@yield('tite1')</title>
</head>

<body>
    <div class="content">
        <div class="container">
            @yield('extra-content')
        </div>
    </div>


    <script src="{{ asset('utils/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('utils/js/popper.min.js') }}"></script>
    <script src="{{ asset('utils/js/bootstrap.min.js') }}"></script>
</body>

</html>
