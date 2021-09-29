@extends('master')
@section("settings")


<nav class="navbar navbar-expand-lg navbar-light bg-light nav2">
  <div class="container-fluid">
    <a class="navbar-brand" href="/settings">Settings</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/settings/home">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

@yield('settings/home')







<style>
    .nav2{
       min-width: 100%;
       position: -webkit-sticky;
       position: sticky;
       top: 0;
       z-index: 0;
    }
</style>
@endsection