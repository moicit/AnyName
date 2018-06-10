<!DOCTYPE html>
<html dir="rtl" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-layer-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('js/slider-layer-slider/skins/fullwidth/skin.css') }}">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/fa-svg-with-js.css')}}" rel="stylesheet">

    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">


    <style>
    @import url('https://fonts.googleapis.com/css?family=Cairo');
    </style>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                  <!-- Branding Image -->
                  <a class="" href="{{ url('/') }}">
                      {{-- {{ config('app.name', 'MOIC') }} --}}
                      <img class="navlogo " alt="MOIC" src="{{asset('img/logo.png')}}">
                  </a>

                  <!-- Collapsed Hamburger -->
                    <button type="button" style="margin-top:10px;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" style="margin-top: 10px;">
                        &nbsp;
                        <li><a href="{{ url('/home') }}">المدونة</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-top:10px;">
                        <!-- Authentication Links -->
                        @guest
                          <li><a href="{{ route('login') }}">التسجيل / الدخول</a></li>
                        @else

                            <li><img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/profile') }}">صفحتي الشخصية</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @include('message')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/fontawesome-all.min.js')}}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/carousel-owl-carousel/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-touchspin/bootstrap.touchspin.js') }}"></script>
    <script src="{{ asset('js/slider-layer-slider/js/greensock.js') }}"></script>
    <script src="{{ asset('js/slider-layer-slider/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('js/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script src="{{ asset('js/layerSliderTest-init.js') }}"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
    <script src="{{ asset('js/needed.js') }}"></script>
    <script src="{{ asset('js/jquery.noty.packaged.js') }}"></script>

    {{--   to toolbox Bold italic .. etc   --}}
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'summary-ckeditor' );
        </script>

  </body>
</html>
