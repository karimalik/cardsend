<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="CarSend : Vente de voiture au cameroun" />
    <meta property="og:description" content="CarSend : Achat de voiture au cameroun" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/images/Logo.png')}}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title> @yield('admin-title') </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{asset('admin/assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/assets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/vendors/calendar/fullcalendar.css')}}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/typography.css')}}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/shortcodes/shortcodes.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/file-upload/imageuploadify.min.css') }}"> --}}

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/dashboard.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/color/color-1.css')}}">
    @yield('admin-extra-css')
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">

<!-- header start -->
<header class="ttr-header">
    <div class="ttr-header-wrapper">
        <!--sidebar menu toggler start -->
        <div class="ttr-toggle-sidebar ttr-material-button">
            <i class="ti-close ttr-open-icon"></i>
            <i class="ti-menu ttr-close-icon"></i>
        </div>
        <!--sidebar menu toggler end -->
        <!--logo end -->
        <div class="ttr-header-menu">
            <!-- header left menu start -->
            <ul class="ttr-header-navigation">
                <li>
                    <a href="{{ route('welcome.index') }}" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                </li>
            </ul>
            <!-- header left menu end -->
        </div>
        <div class="ttr-header-right ttr-with-seperator">
            <!-- header right menu start -->
            <ul class="ttr-header-navigation">
                <li>
                    <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                </li>
                <li>
                    <a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="{{asset('admin/assets/images/avatar1.png')}}" width="32" height="32"></span></a>
                    <div class="ttr-header-submenu">
                        <ul>
                            <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- header right menu end -->
        </div>
        <!--header search panel start -->
        <div class="ttr-search-bar">
            <form class="ttr-search-form">
                <div class="ttr-search-input-wrapper">
                    <input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
                    <button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
                </div>
                <span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
            </form>
        </div>
        <!--header search panel end -->
    </div>
</header>
<!-- header end -->
<!-- Left sidebar menu start -->
<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
{{--            <a href="#"><img alt="" src="{{asset('admin/assets/images/Logo.png')}}" width="122" height="27"></a>--}}
            <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
                <i class="material-icons ttr-fixed-icon">gps_fixed</i>
                <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
            </div> -->
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-left"></i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="{{url('cs-admin/dashboard')}}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashborad</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-car"></i></span>
                        <span class="ttr-label">Auto</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('auto.index') }}" class="ttr-material-button"><span class="ttr-label">Liste Des Voitures</span></a>
                        </li>
                        <li>
                            <a href="#" class="ttr-material-button"><span class="ttr-label">Ajouter Une Voiture</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">Utilisateurs</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="#" class="ttr-material-button"><span class="ttr-label">Liste Des Utilisateurs</span></a>
                        </li>
                        <li>
                            <a href="#" class="ttr-material-button"><span class="ttr-label">Ajouter Un Utilisateur</span></a>
                        </li>
                    </ul>
                </li>
                <li class="ttr-seperate"></li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>
<!-- Left sidebar menu end -->

@yield('admin-content')

<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('admin/assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{asset('admin/assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{asset('admin/assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{asset('admin/assets/vendors/masonry/filter.js')}}"></script>
<script src="{{asset('admin/assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('admin/assets/vendors/scroll/scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/functions.js')}}"></script>
<script src="{{asset('admin/assets/vendors/chart/chart.min.js')}}"></script>
<script src="{{asset('admin/assets/js/admin.js')}}"></script>
<script src="{{asset('admin/assets/vendors/calendar/moment.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/calendar/fullcalendar.js')}}"></script>
{{-- <script src="{{ asset('admin/assets/vendors/file-upload/imageuploadify.min.js') }}"></script> --}}
<script src="{{asset('admin/assets/vendors/switcher/switcher.js')}}"></script>
@yield('admin-extra-js')
<script>
    $(document).ready(function() {

        $('#dataTable').DataTable();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2019-03-12',
            navLinks: true, // can click day/week names to navigate views

            weekNumbers: true,
            weekNumbersWithinDays: true,
            weekNumberCalculation: 'ISO',

            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2019-03-01'
                },
                {
                    title: 'Long Event',
                    start: '2019-03-07',
                    end: '2019-03-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2019-03-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2019-03-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2019-03-11',
                    end: '2019-03-13'
                },
                {
                    title: 'Meeting',
                    start: '2019-03-12T10:30:00',
                    end: '2019-03-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2019-03-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2019-03-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2019-03-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2019-03-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2019-03-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2019-03-28'
                }
            ]
        });

    });

</script>
</body>


</html>
