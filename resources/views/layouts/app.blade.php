<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Algebra Fakultet - @yield('title')</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">  
    </head>
    <body>
        @section('sidebar')
        &nbsp;<a href="{{route("home")}}"><h4 style="color:blue"><b>ALGEBRA FAKULTET</b></h4></a>
        @show
        <div class="container">
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/all.min.js') }}"></script>
    </body>
</html>