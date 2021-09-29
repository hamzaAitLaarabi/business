<!DOCTYPE html>
<html lang="en">
    <head>
        <title>library</title>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <link rel="stylesheet" href="{{ asset('assets\css\css.css') }}">
        <link rel="stylesheet" href="{{ asset('assets\css\all.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Cairo:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Cairo:wght@600&family=Roboto&display=swap" rel="stylesheet">
        <script  src="{{ asset('assets\js\all.js') }}"></script>
        <script  src="{{ asset('assets\js\bootstrap.js') }}"></script>
        <script src="https://kit.fontawesome.com/f9144c40c7.js" crossorigin="anonymous"></script>

    
    </head>
<body style="background-color:#f2f2f2 ;">
<!-- Navbar header -->
{{ View::make('header')}}
@if(Session::has('user') && Session::get('user')['role'] == 1 )
        @yield('settings')
@endif 


<!-- main -->

    @yield('home')
    @yield('posts')
    @yield('login')
    @yield('profil')
    @yield('search')
    @yield('donate')
    @yield('livreur')
    








<!-- footer -->


<div class="div_footer">
{{ View::make('footer')}}
</div>
    
<script  src="{{ asset('assets\js\bootstrap.js') }}"></script>
<script  src="{{ asset('assets\js\popper.min.js') }}"></script>
</body>
</html>