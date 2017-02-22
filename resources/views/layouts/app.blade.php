<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #00008B;
        }

        h2 {
            color: blue;
            text-shadow: 2px 2px 4px red;
        }

        #grad1 {
            height: 250px;
            background: -webkit-linear-gradient(left, red, orange, yellow); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(left, red, orange, yellow); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(left, red, orange, yellow); /* For Fx 3.6 to 15 */
            background: linear-gradient(to right, red, orange, yellow); /* Standard syntax (must be last) */
        }
        
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       
                        <ul>
                          <li><a class="active" href="{{ url('/home') }}">Home</a></li>
                          <li><a href="{{ url('/Jabatan') }}">Jabatan</a></li>
                          <li><a class="active" href="{{ url('/Golongan') }}">Golongan</a></li>
                          <li><a href="{{ url('/Pegawai') }}">Pegawai</a></li>
                          <li><a class="active" href="{{ url('/Penggajian') }}">Penggajian</a></li>
                          <li><a href="{{ url('/KategoriLembur') }}">Kategori Lembur</a></li>
                          <li><a class="active" href="{{ url('/LemburPegawai') }}">Lembur Pegawai</a></li>
                          <li><a href="{{ url('/Tunjangan') }}">Tunjangan</a></li>
                          <li><a class="active" href="{{ url('/TunjanganPegawai') }}">Tunjangan Pegawai</a></li>
                          @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a class="active" href="{{ url('/register') }}">Register</a></li>
                        @else
                        </ul>
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
