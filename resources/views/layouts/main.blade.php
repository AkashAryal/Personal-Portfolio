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
            Welcome to my little world!
        </div>

        <nav class="navbar navbar-expand-md ">
          @section('navBar')
            @show
            <div class="links mx-auto">
                <div class="btn-group">
                    <button type="button" class="btn  d-md-none">Click Me!</button>
                    <button type="button" class="btn  dropdown-toggle dropdown-toggle-split d-md-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/') }}">Who am I?</a>
                        <a class="dropdown-item" href="https://drive.google.com/file/d/1uNT5ddOQe_KV62XNvok4QSNP6vS5NK4u/view?usp=sharing" target="_blank">Resume</a>
                        <a class="dropdown-item" href="{{ url('/projects') }}">Projects</a>
                        <a class="dropdown-item" href="{{ url('/research') }}" target="_blank">Research</a>
                        <a class="dropdown-item" href="https://github.com/AkashAryal" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="links mx-auto">
                    <a href="{{ url('/') }}">Who am I?</a>
                    <a href="https://drive.google.com/file/d/1uNT5ddOQe_KV62XNvok4QSNP6vS5NK4u/view?usp=sharing" target="_blank">Resume</a>
                    <a href="{{ url('/projects') }}">Projects</a>
                    <a href="{{ url('/research') }}">Research</a>
                    <a href="https://github.com/AkashAryal" target="_blank">GitHub</a>
                </div>

            </div>

        </nav>
    </div>

    <hr style="margin-bottom: 0">
    </hr>

    <div id="main">
        @yield('content')
    </div>

</body>

</html>
