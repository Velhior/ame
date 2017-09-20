<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AME') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
	<div class="container is-fluid is-ws">
<div class="container">
<nav class="navbar is-ws">
<div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img class="logo-main" src="{{ asset('images/BeardGuyLogo.jpg') }}">
    </a>
    <a class="navbar-burger" data-target="navMenu">
     <span></span>
     <span></span>
     <span></span>
    </a>
    
    </div>
    <div class="navbar-menu" id="navMenu">
    <div class="navbar-start is-toggle">
    <a href="{{ route('fitness') }}" class="navbar-item is-tab">Fitness</a>
    <a href="{{ route('food') }}" class="navbar-item is-tab">Healthy Food</a>
    <a href="{{ route('motivation') }}" class="navbar-item is-tab">Motivation</a>
    <a href="{{ route('event') }}" class="navbar-item is-tab">Events</a>
    </div>
     <hr class="dropdown-divider">
    <div class="navbar-end">
        <a class="navbar-item is-tab" href="{{ route('login') }}">LogIn</a>
        <a class="navbar-item is-tab" href="{{ route('register') }}">Join</a>
    </div>
    </div>
  
  

</nav>
</div>
</div>
<div class="container">
	<div class="section">
       
        @yield('content')
        
    </div>
</div>
</div>
<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>AME</strong> by <a href="#">MV</a>
        
      </p>
      <p>
        <a class="icon" href="#">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>