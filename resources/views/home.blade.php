@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<main>
 <x-intensogym />
   <div class="web" style="padding: 2em;">
  <div class="container">
    <h2>Bienvenido a la página de inicio</h2>
  </div>
  @include('partials.promociones') <!-- Carrusel aquí -->
   </div>
</main>
@endsection
  