<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Birds</title>
    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="css/flickity.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/gallery_zoom.css" rel="stylesheet">
    @yield('formstyle')
    <!-- Favicons -->
    <link rel="icon" href="./public/images/icon/dove.png">
    <script src="./public/js/jquery-3.6.0.min.js"></script>
    <script src="./public/js/jquery.lettering.js"></script>
    <script src="./public/js/jquery.textillate.js"></script>
</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="/">
                Birds
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <ul class="nav nav-navbar">
                <li class="nav-item ml-5 x-back"><a class="x_color font-weight-bolder"  href="/">Home</a></li>
{{--                @auth--}}
{{--                    <li class="nav-item ml-3 x-back"><a class="x_color font-weight-bolder" href="/search">search</a></li>--}}
{{--                    <li class="nav-item ml-3 x-back"><a class="x_color font-weight-bolder" href="/searchkb">search KB</a></li>--}}
{{--                @endauth--}}
{{--                @guest--}}
                    <li class="nav-item ml-3 x-back"><a  class="x_color font-weight-bolder text-muted" href="/search">search</a></li>
{{--                    <li class="nav-item ml-3 x-back"><a  class="x_color font-weight-bolder text-muted" href="/searchkb">search KB</a></li>--}}
{{--                @endguest--}}
{{--                <li class="nav-item ml-3 x-back"><a class="x_color font-weight-bolder" href="/about">About us</a></li>--}}
{{--                <li class="nav-item ml-3 x-back"><a class="x_color font-weight-bolder" href="/contact">Contact us</a></li>--}}
            </ul>
        </section>

        @auth
            @if(auth()->user()->role == 'admin')
                <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Dashboard </a>
            @else
                <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Profile </a>
            @endif
        @endauth
        @guest
            <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Login</a>
        @endguest

    </div>
</nav><!-- /.navbar -->


<!-- Header -->
@yield('header')


<!-- Main Content -->
@yield('content')


<!-- Footer -->
<footer class="footer" >
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="/">Birds</a>
            </div>

            <div class="col-6 col-lg-3 text-right order-lg-last " style="margin-left: 100%; transform: translateX(-100%); top: -3.8rem">
                <div class="social" >
                    <a class="social-facebook" target="-_blank" href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                    <a class="social-twitter" target="-_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="social-instagram" target="-_blank" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>



        </div>
    </div>
</footer><!-- /.footer -->


<!-- Scripts -->

<script src="{{asset('js/page.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="./public/js/flickity.pkgd.min.js"></script>
<script src="./public/js/all.min.js"></script>
<script src="./public/js/aos.js"></script>
<script>
    $(function () {
        $(".tlt").textillate();
    })
</script>
@yield('search')
</body>
</html>
