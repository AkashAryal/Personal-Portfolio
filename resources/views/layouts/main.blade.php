<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('css')
</head>

<body>
    
<div class="content">
    <div class="title m-b-md">
        Welcome to my little World!
    </div>

    <nav class="navbar navbar-expand-md ">
        <div class="links mx-auto">
            <a class="dropdown-toggle d-md-none  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                        Click Me!</a>
            <div class="links dropdown-menu mx-auto " aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item" href="https://laravel.com/docs">Docs</a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="links mx-auto">
                <a href="https://laravel.com/docs">Who am I?</a>
                <a href="https://laracasts.com">Resume</a>
                <a href="https://laravel-news.com">Projects</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>

        </div>

    </nav>
</div>

<hr style="margin-bottom: 0"></hr>

<div id="main">
    @yield('content')
</div>

</body>

</html>