<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title>@yield('title')</title>
    <!-- Font do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet"> 
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <!-- CSS Aplicação -->
  	<link rel="stylesheet" href="/css/styles.css">

    <!-- JS Aplicação -->
  	<script src="/js/script.js"></script>
  </head>
  <body class="antialiased">
  		
      @yield('content')
      <footer>
        <p>Laravel - Learning  &copy; 2023</p>
      </footer>
  </body>
</html>
