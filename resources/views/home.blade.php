@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
  <div class="container">
    <h2>Bienvenido a la página de inicio</h2>
  </div>
  @include('partials.promociones') <!-- Carrusel aquí -->
  
@endsection
  