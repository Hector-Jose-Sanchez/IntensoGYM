@extends('layouts.app') {{-- Asegúrate de tener una plantilla base --}}
@section('content')
<main>
 <x-intensogym />
   <div class="web" style="padding: 2em;">
<link rel="stylesheet" href="{{ Vite::asset('resources/css/subpro.css') }}">
<script type="module" src="{{ Vite::asset('resources/js/subpro.js') }}"></script>

<div class="promo-wrapper">

    <!-- VISTA PREVIA EN TIEMPO REAL -->
    <div class="preview-section">
        <h3>Vista previa en tiempo real</h3>
        <div class="preview-box">
            <img id="preview-image"  alt="Vista previa de imagen" class="preview-img" />
            <p id="preview-text" class="preview-text">Aquí aparecerá la descripción...</p>
        </div>
    </div>

    <!-- FORMULARIO DE CARGA -->
    <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data" class="promo-form">
        @csrf

        <!-- DRAG & DROP -->
        <div class="drag-drop-area" id="drop-area">
            <input type="file" name="image" id="fileElem" accept="image/*" required hidden>
            <label for="fileElem" id="fileLabel">Arrastra y suelta la imagen o haz clic aquí</label>
        </div>

        <!-- DESCRIPCIÓN -->
        <div class="text-area">
            <label for="text">Descripción de la promoción</label>
            <textarea name="text" id="text" rows="4" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Subir promoción</button>
    </form>
</div>
   </div>
</main>
@endsection
