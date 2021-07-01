<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    {{-- chart --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"
        integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body id="dashboard_body">
    <header>
        <div id="root">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('guest.home') }}">
                        <img src="{{ asset('img/deliveboo_logo_chiaro_modificato.png') }}" alt="">
                    </a>
                    <button @click="showDropdown()" class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav px-3 ml-auto">
                            <li class="nav-item none_button">
                                <a class="nav-link active link_class" href="{{ route('admin.home') }}">Profilo</a>
                            </li>
                            <li class="nav-item none_button">
                                <a class="nav-link link_class mg_left" href="{{ route('admin.restaurant.index') }}">I
                                    tuoi piatti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_class mg_left" href="{{ route('guest.home') }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_class mg_left" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container_dropdown">
                    <div class="dropdown_my" :style="{display: displayDropdown}">
                        <i class="fas fa-times" @click="showDropdown()"></i>
                        <ul style="list-style: none">
                            {{-- <li>
                                <a class="nav-link link_class" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_class mg_left"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link link_class mg_left" href="{{ route('guest.home') }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_class mg_left" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    {{-- <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block bg-light sidebar py-4">
                <div class="sidebar-sticky sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active collegamento" href="{{ route('guest.home') }}"><i class="fas fa-home sideawesome"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collegamento" href="{{ route('admin.restaurant.index') }}"><i class="fas fa-utensils sideawesome"></i> I tuoi piatti
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.orders') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                Ordini
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> --}}

    {{-- Sezione SIDEBAR --}}
    <section class="main_nav">
        <div class="nav_top">
            <ul class="nav flex-column nav_container">
                <li class="nav-item">
                    <a class="active collegamento" href="{{ route('admin.home') }}">
                        <i class="fas fa-user-alt sideawesome"></i><span class="text_hidden">Profilo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="collegamento" href="{{ route('admin.restaurant.index') }}">
                        <i class="fas fa-utensils sideawesome"></i><span class="text_hidden">I tuoi piatti</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="collegamento" href="{{ route('admin.orders') }}">
                        <i class="fas fa-list-ul sideawesome"></i><span class="text_hidden">Ordini</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="collegamento" href="{{ route('admin.chart') }}">
                        <i class="fas fa-chart-pie sideawesome"></i><span class="text_hidden">Statistiche</span> 
                    </a>
                </li>
            </ul>
        </div>
    </section>

    @yield('content')


    {{-- Sezione del footer --}}
    <footer class="dashboard_footer">
        <div class="wrapper_footer">
            <div class="footer_container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 footer_1">
                        <img class="footer_logo" src="{{ asset('img/deliveboo_logo_chiaro_tagliato.png') }}" alt="">
                        <span class="footertext_1">© 2021 DeliveBoo. All rights reserved.</span>
                        <span class="footertext_1">Proudly made from Booleaners - Group 2 #26</span>
                        <a href="#"><i class="fab fa-facebook-square ms_font"></a></i>
                        <a href="#"><i class="fab fa-twitter ms_font"></a></i>
                        <a href="#"><i class="fab fa-instagram ms_font"></a></i>
                        <a href="#"><i class="fab fa-youtube ms_font"></a></i>
                        <a href="#"><i class="fab fa-linkedin ms_font"></a></i>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2 nav">
                        <ul>
                            <li>
                                <h4>Scopri...</h4>
                            </li>
                            <li>Investitori</li>
                            <li>Chi siamo</li>
                            <li>Ristoranti</li>
                            <li>Altro</li>
                            <li>Pressroom</li>
                            <li>Il nostro blog</li>
                            <li>Programmazione</li>
                            <li>Design</li>
                            <li>Lavora con noi</li>
                            <li>Diventa nostro partner</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2 nav">
                        <ul>
                            <li>
                                <h4>Note</h4>
                            </li>
                            <li>Termini & Condizioni</li>
                            <li>Informativa sulla privacy</li>
                            <li>Cookies</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2 nav">
                        <ul>
                            <li>
                                <h4>Aiuto</h4>
                            </li>
                            <li>Contatti</li>
                            <li>FAQ</li>
                            <li>Tipi di cucina</li>
                            <li>Mappa del sito</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2 nav">
                        <ul>
                            <li>
                                <h4>Supporto</h4>
                            </li>
                            <li>Contattaci</li>
                            <li>Informazioni</li>
                            <li>Segnala</li>
                            <li>Riders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/vue.js') }}"></script>
</body>

</html>
