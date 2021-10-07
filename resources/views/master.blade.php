<!DOCTYPE html>
<html lang="en">
    <head>
        <title>library</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.v5.0.2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets\css\fontawesome.v6.0.0.css') }}">
        <link rel="stylesheet" href="{{ asset('assets\css\business.css') }}">
        <link rel="stylesheet" href="{{ asset('assets\css\posts.css') }}">
        {{ View::make('links')}}
    </head>
<body class="red-green-yellow-black ">
    {{ View::make('header')}}
    @yield('home')
    @yield('posts')
    @yield('login')
    @yield('profil')
    @yield('search')
    @yield('donate')
    @yield('livreur')   
    <script  src="{{ asset('assets\js\bootstrapV5.0.2.js') }}"></script>
    <script  src="{{ asset('assets\js\all.fontawesomeV6.0.0.js') }}"></script>
    <script  src="{{ asset('assets\js\business.js') }}"></script>
    <script  src="{{ asset('assets\js\jQueryV3.5.1.min.js') }}"></script>
    <script  src="{{ asset('assets\js\popperV2.9.2.min.js') }}"></script>
</body>
</html>
