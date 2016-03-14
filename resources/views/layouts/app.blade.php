<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>I.V.D. Assets</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    I.V.D. Assets
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Assets<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('/assets') }}">View Assets</a></li>
                        <li><a href="{{ url('/assets/create') }}">Create Asset</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/models') }}">View Models</a></li>
                        <li><a href="{{ url('/models/create') }}">Create Model</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/locations') }}">View Locations</a></li>
                        <li><a href="{{ url('/locations/create') }}">Create Location</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/asset-types') }}">View Asset Types</a></li>
                        <li><a href="{{ url('/asset-types/create') }}">Create Asset Type</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/divisions') }}">View Divisions</a></li>
                        <li><a href="{{ url('/divisions/create') }}">Create Division</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/manufacturers') }}">View Manufacturers</a></li>
                        <li><a href="{{ url('/manufacturers/create') }}">Create Manufacturer</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/pcspecs') }}">View PC Specifications</a></li>
                        <li><a href="{{ url('/pcspecs/create') }}">Create PC Specification</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/statuses') }}">View Statuses</a></li>
                        <li><a href="{{ url('/statuses/create') }}">Create Status</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/suppliers') }}">View Suppliers</a></li>
                        <li><a href="{{ url('/suppliers/create') }}">Create Supplier</a></li>
                      </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('footer')
</body>
</html>
