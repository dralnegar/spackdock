<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('lcars/css/lcars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app" class="lcars-app-container">

        <!-- HEADER ==================================================== -->

        <div id="header" class="lcars-row header">

        <!-- ELBOW -->
        <div class="lcars-elbow left-bottom lcars-tan-bg"></div>

        <!-- BAR WITH TITLE -->
        <div class="lcars-bar horizontal">
            <div class="lcars-title right" style="color:white;size:12px">
            
                <!-- Authentication Links -->
                @guest
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        
                    @endif

                @else
                    Welcome  {{ Auth::user()->name }} <span class="caret"></span>                        
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
            
                
            </div> <!-- .lcars-title right --> 
        </div> <!-- lcars-bar horizontal -->

        <!-- ROUNDED EDGE DECORATED -->
        <div class="lcars-bar horizontal right-end decorated"></div>
        </div> <!-- .header -->

        <!-- SIDE MENU ================================================= -->
        <div id="left-menu" class="lcars-column start-space lcars-u-1">
        <!-- FILLER -->
        <div class="lcars-bar lcars-u-1"><a href="home">Home</a></div>
        </div> <!-- .left-menu -->

        <div id="footer" class="lcars-row ">
        <!-- ELBOW -->
        <div class="lcars-elbow left-top lcars-tan-bg"></div>
        <!-- BAR -->
        <div class="lcars-bar horizontal both-divider bottom"></div>
        <!-- ROUNDED EDGE -->
        <div class="lcars-bar horizontal right-end left-divider bottom"></div>
        </div>    
    
    

        <main id="container">
            @yield('content')
        </main> <!-- #content -->
    </div> <!-- .lcars--app-container -->
</body>
</html>
