<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard')</title>

  <!-- Fuente externa -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&family=Open+Sans&family=Roboto&family=Lobster&family=Pacifico&family=Bebas+Neue&family=Anton&family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Lato&family=Lobster&family=Montserrat&family=Nunito&family=Open+Sans&family=Oswald&family=Pacifico&family=Playfair+Display&family=Poppins&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/style.css', 'resources/js/app.js','resources/js/promo.js','resources/css/promo.css'])


</head>
<body>
  @include('partials.sidebar')

  @yield('content')
</body>
</html> 
