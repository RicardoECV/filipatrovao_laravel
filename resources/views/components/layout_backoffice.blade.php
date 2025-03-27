<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>{{ config('app.name') }}</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'public/fonts/stylesheet.css'])
 
</head>
<body>
  
  @auth
  <header class="container-fluid">    
    @include('header_backoffice')
  </header>
  @endauth
  
  <main>
    @yield('home_backoffice')
  </main>  
  
  @auth
  <footer class="container">
    @include('footer_backoffice')
  </footer>
  @endauth
  
</body>
</html>