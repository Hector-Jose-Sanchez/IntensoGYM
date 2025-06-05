<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts (opcional si no las usás en auth.css) -->

    <!-- Tu CSS (sin interferencias) -->
    @vite(['resources/css/auth.css'])
</head>
<body>
    
        {{ $slot }}
   
</body>
</html>
