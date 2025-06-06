<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard')</title>

  <!-- Fuente externa -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/style.css', 'resources/js/app.js','resources/js/promo.js','resources/css/promo.css','resources/css/subpro.css','resources/js/subpro.css'])


</head>
<body>
  @include('partials.sidebar')

  @yield('content')
</body>
</html> 
