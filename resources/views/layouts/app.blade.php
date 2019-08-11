<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('/public/js/app.js') }}" defer></script>     !For Live Server --}}
    <script src="{{ asset('js/app.js') }}" defer></script>     {{--!For Develop Server--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">     !For Live Server --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">     {{--!For Develop Server--}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/font-awesome/css/all.min.css')}}">
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?v=1.0">-->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('bower_components/admin-lte/dist/css/adminlte.min.css?v=1.0')}}">
    <!-- Bootstrap 4 -->
    <script defer src="{{asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script defer src="{{asset('bower_components/admin-lte/dist/js/adminlte.js')}}"></script>
    <script defer src="{{asset('bower_components/admin-lte/jquery/jquery.min.js')}}"></script>
    <style media="screen">
      .login-body{
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        margin: 0;
        padding: 0;
        z-index: -9999;
        background-image: url("{{asset('image/medical-background.png')}}");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      }
      .login-icon{
        width: 100px;
        height: 100px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border:3px solid gray;
      }
      .login-card{
        border-radius: 0 !important;
      }
      .login-form-input .input-group-text{
        background-color: transparent !important;
        margin-left: -2.5rem;
        border: none;
        z-index: 9999;
      }
      .login-form-input .form-control{
        border-radius: 0 !important;
      }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" hidden>
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                    Hello, {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
    @yield('script')
</html>
