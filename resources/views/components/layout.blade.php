<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>{{ config('app.name') }}</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'public/fonts/stylesheet.css'])
 
</head>
<body>
  
  <header class="container-fluid">    
    @include('header')
  </header>

  <main>
    @yield('content')
  </main>
  
  <footer class="container">
    @include('footer')
  </footer>
  
</body>
</html>