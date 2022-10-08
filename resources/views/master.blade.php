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
        <link rel="stylesheet" href="{{ asset('css\app.css') }}">
        {{ View::make('links')}}
        <!-- https -->
        <link rel="stylesheet" href="https://library.azurewebsites.net/assets\css\bootstrap.v5.0.2.css">
        <link rel="stylesheet" href="https://library.azurewebsites.net/assets\css\fontawesome.v6.0.0.css">
        <link rel="stylesheet" href="https://library.azurewebsites.net/assets\css\business.css">
        <link rel="stylesheet" href="https://library.azurewebsites.net/assets\css\posts.css">
        <link rel="stylesheet" href="https://library.azurewebsites.net/css\app.css">
    </head>
<body>
    {{ View::make('header')}}
<div id="app" class="app">
    <index/>
</div>
    @yield('home')
    @yield('posts')
    @yield('login')
    @yield('profil')
    @yield('search')
    @yield('donate')
    @yield('livreur')
    <script  src="{{ asset('js\app.js')}}"></script>
    <script  src="{{ asset('assets\js\bootstrapV5.0.2.js') }}"></script>
    <script  src="{{ asset('assets\js\all.fontawesomeV6.0.0.js') }}"></script>
    <script  src="{{ asset('assets\js\business.js') }}"></script>
    <script  src="{{ asset('assets\js\jQueryV3.5.1.min.js') }}"></script>
    <script  src="{{ asset('assets\js\popperV2.9.2.min.js') }}"></script>
    <!-- https -->
    <script src="https://library.azurewebsites.net/js\app.js"></script>
    <script src="https://library.azurewebsites.net/assets\js\bootstrapV5.0.2.js"></script>
    <script src="https://library.azurewebsites.net/assets\js\all.fontawesomeV6.0.0.js"></script>
    <script src="https://library.azurewebsites.net/assets\js\business.js"></script>
    <script src="https://library.azurewebsites.net/assets\js\jQueryV3.5.1.min.js"></script>
    <script src="https://library.azurewebsites.net/assets\js\popperV2.9.2.min.js"></script>

</body>
</html>
