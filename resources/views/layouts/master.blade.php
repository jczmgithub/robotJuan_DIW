<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/robotJuan.css">
</head>
<body>
    @include('includes.nav')

    @include('includes.modal')

    @include('includes.loginModal')

    <div class="jumbotron text-center">
        @yield('titulo')
    </div>

    @yield('content')

    @include('includes.footer')
</body>
</html>