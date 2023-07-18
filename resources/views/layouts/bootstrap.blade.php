<!doctype html>
<html lang="en" data-bs-theme="auto">
<head><script src="/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Summit Title Company')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



    @yield('styles')
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        .nav-item{
            margin-right: 5px;
        }
        .nav-item a.active{
            border: 1px solid #000;
            border-radius: 0.3rem;
        }
        .nav-item > a:hover{
            border: 1px solid #000;
            border-radius: 0.3rem;
        }
    </style>

</head>
<body>
<div id="navBarWrapper" class="border-bottom shadow">
    <div class="container">
        <nav class="navbar navbar-expand-lg rounded p-0">
            <div class="container-fluid py-1">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="/images/summit_title_bw_logo.png" alt="Summit Title Logo" style="width: 100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="col justify-content-end mb-2 mb-lg-0 navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Location</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" aria-expanded="false">Tools</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('sellers_net_sheet')}}">Seller's Net Sheet</a></li>
                                <li><a class="dropdown-item" href="#">Order Title Work</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" disabled>/</a>
                        </li>
                        @if (Route::has('login'))
                              @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Welcome {{auth()->user()->name}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Net Sheets</a></li>
                                        <li><a class="dropdown-item" href="#">Request Title Work</a></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();" href="{{route('logout')}}">logout</a>

                                            </form>

                                        </li>
                                    </ul>
                                </li>

                               @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<main>
    @yield('content')
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
@yield('scripts')
</body>

</html>
