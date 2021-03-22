<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
    .header
    {
        background-color: lightgray;
        margin: 0 auto;
        text-align: center;
        padding: 0;
        font-size: 30px;
        display: block;
        padding: 75px;
        font-style: oblique;
    }
    body
    {
        background-color: #EBECF0;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
    }
    ul 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li 
    {
        float: left;
    }

    li a 
    {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover 
    {
        background-color: #111;
    }
    li a, .dropbtn {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    
    li.dropdown {
        display: inline-block;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #333;
        min-width: 160px;
    }
    
    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: center;
        background-color:  #333;
    }
    .dropdown-content a:hover {background-color: #111;}
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
    .card {
    padding: 70px 0;
    text-align: center;
    }
    .flexbox
    {
        display: inline-flex;
        align-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap; 
    }
    .flexbox >div
    {
        padding: 10px;
    }
    .list
    {
        width: 200px;
    }
}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wonderful Journey</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="header">
                <p class="navbar-brand" href="#">
                    Wonderful Journey
                </p>
                <p style="font-size: 15px;">Blog of Indonesia Tourism</p>
            </div>
            
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="/">Home</a></li>
                            <li class="dropdown"><a href="#category" class="dropbtn">Category</a>
                                <div class="dropdown-content">
                                    <a href="/category/1">Beach</a>
                                    <a href="/category/2">Mountian</a>
                                </div>
                            </li>
                            <li><a href="/aboutus">About Us</a></li>
                            <div style="float: right">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            </div>
                        @else
                            @if(Auth::user()->role == "Admin")
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Admin</a></li>
                                <li><a href="/adminuser">User</a></li>
                            @else
                                <li><a href="/">Home</a></li>
                                <li><a href="/profile">Profile</a></li>
                                <li><a href="/blog">Blog</a></li>
                            @endif
                                
                            <div style="float: right">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                               
                            </li>
                            
                            <li>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
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
                            </div>
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
</html>
