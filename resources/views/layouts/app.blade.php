<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/admain.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>
<body>
    <div id="app">

        <!--navbar1-->

        <div class="nav1">

            <nav class="navbar navbar-expand-lg navbar-light bg-light bg-light1">
                <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('images/logo4.png')}}"></a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
                </div>
            </nav>
        </div>

        @auth
            @else
            <div class="nav2">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link nav2" href="{{route('home_user')}}">Home </a>
                                </li>

                                <!--<li class="nav-item dropdown">
                                    <a class="nav-link nav2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        categories
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">sell and buy</a>
                                        <a class="dropdown-item" href="#">volunteer works</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">exchange</a>
                                    </div>
                                </li>-->

                                 <li class="nav-item">
                                    <a class="nav-link nav2" href="{{route('items')}}">Items</a>
                                 </li>
                                <li class="nav-item">
                                    <a class="nav-link nav2" href="{{route('display_vendor')}}">Vendor</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav2" href="{{route('about_as')}}">about us</a>
                                </li>
                            </ul>
                            <a  class="navbar2-btn" href="{{route('contact')}}">contact Now</a>

                        </div>
                    </div>
                </nav>
            </div>
        @endauth



        <main>
            @yield('content')
        </main>
        <!--footer-->
        <footer class=" w-100 mt-2 container-fluid mx-0 px-0  text-center ">

            <div class="container-fluid rounded-top ">
                <!--second bar -->
                <!--col 1-->
                <div class="row ">
                    <div class="col-md-3 col-sm-6 col-12 pt-4 footer_col pb-3 text-light">
                        <h6 class="text-uppercase">our providers</h6>
                        <hr class="mb-3 mt-0 mx-auto rounded">
                        <div class="px-5">
                            All peopls who join with our Khdmate family are providers for us ,we are groew together as a large family.<br>
                            "Our goal is give the best for you."
                        </div>
                    </div>
                    <!--col 2-->
                    <div class="col-md-3 col-sm-6 col-12 p-0 pt-4 footer_col pb-3 text-light">
                        <h6 class="text-uppercase">categorize</h6>
                        <hr class="mb-3 mt-0 mx-auto">
                        <ul class="list-unstyled text-capitalize">
                            <li>foods</li>
                            <li>clothes</li>
                            <li>services</li>
                            <li>furniture</li>
                            <li>Others</li>
                            <li>payment</li>
                            <li>exchange</li>
                            <li>volunteering</li>
                        </ul>
                    </div>
                    <!--col 3-->
                    <div class="col-md-3 col-sm-6 col-12 pt-4 footer_col pb-3 text-light">
                        <h6 class="text-uppercase">subscribe us</h6>
                        <hr class="mb-3 mt-0 mx-auto">
                        <div class="align-content-center justify-content-center flex-sm-column">
                            <input id="e-mail" type="email" name="email-address" placeholder="your email" class="col-7 mb-2 mx-auto px-2 py-1 rounded d-block"/>
                            <button for="e-mail" class="col-7 btn-primary rounded bg_pink p-1 px-5">Subscribe</button>
                        </div>
                        <p class="px-5 py-2">So you will receive our updates on your email.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 pt-4 footer_col pb-3 text-light">
                        <h6 class="text-uppercase">Contact Us</h6>
                        <hr class="mb-3 mt-0 mx-auto">
                        <p><a class="text-light" href="#" target="_blank" title="Khdmate">info@domain.com</a></p>
                        <ul class="justify-content-center rounded-top px-1 social">
                            <li class="d-inline"><a title="youtube" target="_blank" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                            <li class="d-inline"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="d-inline"><a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
                            <li class="d-inline"><a title="instagram" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <img src="{{asset('images/logo.png')}}" alt="khdmate-logo" class="w-50 m-2"/>
                    </div>
                </div>
                <!--copyright-->
                <div class="row p-2 copyright  text-muted">
                    <div class="col-12">Copyright &copy; 2020. Al-Balqa Applied University.</div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--jump-->
        <div class="fixed-bottom text-right  p-3">
            <a href="#" class="text-danger"><i class="top-arrow fas fa-arrow-circle-up font-weight-bold"></i></a>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="{{asset('js/main.js')}}"></script>
            <!-- Initialize Swiper -->
            <script>
              var swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                  rotate: 50,
                  stretch: 0,
                  depth: 100,
                  modifier: 1,
                  slideShadows: true,
                },
                pagination: {
                  el: '.swiper-pagination',
                },
              });
            </script>
@include('sweetalert::alert')
</body>
</html>
