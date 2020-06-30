<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Algebra Fakultet - @yield('title')</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">  
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/all.min.js') }}"></script>
    </body>
</html>