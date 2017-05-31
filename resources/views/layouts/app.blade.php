<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Emanuel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/css/sidenav.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!--bootstrap-->
    <link rel="stylesheet"  href="{{asset('/css/bootstrap.min.css')}}">

</head>
<body style="background-color: #5e2129;">
<div id="app">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">



            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: #e7bd42; font-family: 'Raleway', sans-serif">Panoramicas Emanuel</a>
                <div></div>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Registro</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <!--test sidenav-->
    @if(Auth::check())
        <div class="nav-side-menu">
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                        <a href="/home">
                            <i class="fa fa-dashboard fa-lg"></i>&nbsp; Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/grupos">
                            <i class="fa fa-graduation-cap fa-lg"></i>&nbsp; Grupos
                        </a>
                    </li>
                    <li>
                        <a href="/clientes"><i class="fa fa-users fa-lg"></i> &nbsp;Clientes </a>
                    </li>
                    <li>
                        <a href="/contratos"><i class="fa fa-file-text fa-lg"></i>&nbsp; Contratos </a>
                    </li>
                    <li>
                        <a href="/pedidos">
                            <i class="fa fa-tag fa-lg"></i>&nbsp; Pedidos
                        </a>
                    </li>
                    <li>
                        <a href="/pagos"><i class="fa fa-usd fa-lg"></i>&nbsp; Pagos </a>
                    </li>
                    <li>
                        <a href="/anillos">
                            <i class="fa fa-circle-o-notch fa-lg"></i>&nbsp; Anillos
                        </a>
                    </li>
                    <li>
                        <a href="/gastos">
                            <i class="fa fa-money fa-lg"></i>&nbsp; Gastos
                        </a>
                    </li>
                    <li>
                        <a href="/paquetes">
                            <i class="fa fa-gift fa-lg"></i>&nbsp; Paquetes
                        </a>
                    </li>
                    <li>
                        <a href="/eventos">
                            <i class="fa fa-calendar fa-lg"></i>&nbsp; Eventos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @endif

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $( ".target" ).change(function() {
    });
    function updateInput(ish){
        document.getElementById("fieldname").value = ish;
    }
</script>
</body>
</html>
