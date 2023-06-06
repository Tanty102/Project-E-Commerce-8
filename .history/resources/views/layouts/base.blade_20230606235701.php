<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @livewireStyles
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+123) 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>@lang("message.hotline"): (+123) 456 789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>


                                <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="locale/en"><span class="img label-before"><img
                                                src="assets/images/lang-en.png" alt="lang-en"></span>English<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu lang">
                                        <li class="menu-item"><a title="vietnam" href="locale/vi"><span
                                            class="img label-before"><img src="assets/images/lang-vn.png"
                                                alt="lang-vi"></span>Việt Nam</a></li>
                                        <li class="menu-item"><a title="hungary" href="#"><span
                                                    class="img label-before"><img src="assets/images/lang-hun.png"
                                                        alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item"><a title="german" href="#"><span
                                                    class="img label-before"><img src="assets/images/lang-ger.png"
                                                        alt="lang-ger"></span>German</a></li>
                                        <li class="menu-item"><a title="french" href="#"><span
                                                    class="img label-before"><img src="assets/images/lang-fra.png"
                                                        alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item"><a title="canada" href="#"><span
                                                    class="img label-before"><img src="assets/images/lang-can.png"
                                                        alt="lang-can"></span>Canada</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                @if (Auth::user()->utype === 'ADM')
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My account" href="#">@lang("message.my account") ({{Auth::user()->name}})<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{ route ('admin.dashboard')}}">@lang("message.dashboard")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.categories')}}" title="Categories">@lang("message.categories")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.attributes')}}" title="Attributes">@lang("message.Attributes")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.products')}}" title="Products">@lang("message.All Products")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.homeslider')}}" title="Manage Home Slider">@lang("message.Manage Home Slider")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.homecategories')}}" title="Manage Home Categories">
                                                @lang("message.Manage Home Categories")
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.sale')}}" title="Sale Setting">
                                                @lang("message.Sale Setting")
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.coupons')}}" title="All Coupon">
                                                @lang("message.All Coupon")
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.orders')}}" title="All Orders">
                                                @lang("message.All Orders")
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.contact')}}" title="Contact Message">
                                                @lang("message.Contact Message")
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.settings')}}" title="Settings">
                                                @lang("message.Settings")
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('logout')}}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang("message.Logout")</a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @else
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My account" href="#">@lang("message.my account") ({{Auth::user()->name}})<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{ route ('user.dashboard')}}">@lang("message.dashboard")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="My Orders" href="{{ route ('user.orders')}}">@lang("message.My Orders")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="My Profile" href="{{ route ('user.profile')}}">@lang("message.Profile")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Change Password" href="{{ route ('user.changepassword')}}">@lang("message.Change Password")</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('logout')}}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang("message.Logout")</a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @endif
                                @else
                                <li class="menu-item"><a title="Register or Login" href="{{route('login')}}">@lang("message.Login")</a>
                                </li>
                                <li class="menu-item"><a title="Register or Login"
                                        href="{{route('register')}}">@lang("message.Register")</a>
                                </li>
                                @endif

                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png')}}"
                                    alt="mercado"></a>
                        </div>

                        @livewire('header-search-component')

                        <div class="wrap-icon right-section">
                            @livewire('wishlist-count-component')

                            @livewire('cart-count-component')
                            
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="header-nav-section">
                        <div class="container">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
                                <li class="menu-item"><a href="#" class="link-term">@lang("message.Weekly Featured")</a><span
                                        class="nav-label hot-label">@lang("message.hot")</span></li>
                                <li class="menu-item"><a href="#" class="link-term">@lang("message.Hot Sale items")</a><span
                                        class="nav-label hot-label">@lang("message.hot")</span></li>
                                <li class="menu-item"><a href="#" class="link-term">@lang("message.Top new items")</a><span
                                        class="nav-label hot-label">@lang("message.hot")</span></li>
                                <li class="menu-item"><a href="#" class="link-term">@lang("message.Top Selling")</a><span
                                        class="nav-label hot-label">@lang("message.hot")</span></li>
                                <li class="menu-item"><a href="#" class="link-term">@lang("message.Top rated items")</a><span
                                        class="nav-label hot-label">@lang("message.hot")</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                
                                <li class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">@lang('message.shop')</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">@lang('message.Cart')</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">@lang("message.Checkout")</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/contact-us" class="link-term mercado-item-title">@lang("message.Contact Us")</a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html" class="link-term mercado-item-title">@lang("message.about us")</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{$slot}}

    @livewire("footer-component")

    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tiny.cloud/1/t4uaoanhjruma3w5rv5o40rt3yq6bsbu88n7dxw9oi9h8szv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    @livewireScripts

    @stack('scripts')
</body>

</html>