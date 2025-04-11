<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>{{ config('app.name') }}</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style_backoffice.css'])
 
</head>
<body>
  
  @auth
    <header class="container-fluid">    
      @include('backoffice_header')
    </header>
  @endauth
  
  <main>
    @yield('backoffice_index')
  </main>  
  
  @auth
    <footer class="container-fluid">
      @include('backoffice_footer')
    </footer>
  @endauth
  
</body>
</html>