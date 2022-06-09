<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('backend/assets/favicon.png')}}" type="image/x-icon" />


   
    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/assets/css/css/all.css')}}" />
		

    <!-- Styles -->
    <title>{{ config('app.name', 'Recorded E-Commerce') }}</title>

</head>
<body>
    <div id="nav_app">
        <nav class="navbar_main">
           
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Recorded Project') }}
                </a>
                

                <div class="navbar" id="navbarSupported">
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar_bar">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="item">
                                    <a class="link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="item">
                                    <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="" class="link_dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        </nav>





        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('backend/assets/js/chart.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/script.js')}}"></script>
</body>
</html>
