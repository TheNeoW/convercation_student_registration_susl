<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/style.css">

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>Convocation Student Registration</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{--    datepicker--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
{{--    <link id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">--}}
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">

</head>

<body style="background-color: rgba(128,15,15,0.11)">
    <div id="app">
        <nav style="background-color: #800f0f" class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">

                @guest
                    <a class="navbar-brand">
                        {{--                    {{ config('app.name', 'Laravel') }}--}}
                        SUSL
                    </a>
                @else
                    <a href="{{ url('/verifyEmail') }}" class="navbar-brand">
                        {{--                    {{ config('app.name', 'Laravel') }}--}}
                        SUSL
                    </a>
                @endguest
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif


                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif



                        @else

{{--                            @if (1>0)--}}
{{--                                <a class="dropdown-item" href="#" aria-expanded="false" v-pre>--}}
{{--                                    Load Bursary--}}
{{--                                </a>--}}
{{--                            @endif--}}

{{--                            <li class="nav-item dropdown">--}}
                                <a style="color: #a8a8a8" class="dropdown-item" href="#" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                            @if(checkPermission(['mainStoreClark','viceChancellor','Admin','EBSC_Applied','EBSC_Geo','EBSC_Social','EBSC_Mana','EBSC_Med','EBSC_Agri','EBSC_Tech','EBSC_GS','surveyAccess','EBSC_Computing']))

                                <a href="{{ route('eligibleStudents.index') }}" style="color: #a8a8a8" class="dropdown-item" href="#" aria-expanded="false" v-pre>
                                    Dashboard
                                </a>
                            @endif

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    <a style="color: #a8a8a8" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

{{--                                </div>--}}
{{--                            </li>--}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
{{--            <div class="welcomebgimage">--}}
                @yield('content')
{{--            </div>--}}

        </main>
    </div>
</body>
</html>
