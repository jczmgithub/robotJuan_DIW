<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/robotJuan.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('includes.nav')

    @include('includes.modal')

    @include('includes.loginModal')

    <div class="jumbotron text-center jumbotronLayout">
        @yield('titulo')
    </div>

    @yield('content')

    @include('includes.footer')
</body>
</html>