<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Aptoclick | @yield('title')</title>

    <!-- SEO Meta Tags-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #666276;
            ;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #bbb7c5;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        .floating{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
             font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
      }

      .float-button{
        margin-top:10px;
      }
      
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function() {
            window.onload = function() {
                var preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 2000);
            };
        })();
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/nouislider/dist/nouislider.min.css') }}" />
    @yield('pluginsCss')
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.css') }}" />
    @yield('customCss')
</head>
<!-- Body-->

<body>
    <!-- Page loading spinner-->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>
    <main class="page-wrapper">
        @include('auth.login');
        <!-- Navbar-->
        <header class="navbar navbar-expand-lg navbar-light bg-light fixed-top  navbar-stuck" data-scroll-header>
            <div class="container">
                <a class="navbar-brand me-3 me-xl-4" href="/" style="font-family: kollektif;">
                    <span class="display-6" style="color: #fd5631">aptoclick</span>
                </a>
                @include('layouts.navbar')
            </div>
        </header>
        <!-- Page content-->
        <!-- Property cost calculator modal-->
        @yield('contenido')
    </main>
    <!-- Footer-->
    @include('footer')
    @yield('filtros')
    <!-- <a href="https://api.whatsapp.com/send?phone=0987654321&text=Hello%21%20." class="floating" target="_blank">
      <div class="text-light">
        <i class="fi-whatsapp float-button"></i>
      </div>
    </a> -->
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i
            class="btn-scroll-top-icon fi-chevron-up">
        </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/nouislider/dist/nouislider.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('pluginsJs')
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <script src="{{ asset('js/custom/layout.js') }}"></script>
    <script src="{{ asset('js/custom/RequestResponse.js') }}"></script>
    @yield('customScripts')
</body>

</html>
