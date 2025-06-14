@extends('layouts.app')
<link rel="stylesheet" href="{{ Vite::asset('resources/css/subpro.css') }}">
<script type="module" src="{{ Vite::asset('resources/js/subpro.js') }}"></script>

@section('content')
<main>
 <x-intensogym />
 <div class="web" style="padding: 2em;">
  <div class="promo-wrapper">
    <div class="preview-section">
        <h3>Vista previa en tiempo real</h3>
        <div class="preview-box">
            <img id="preview-image" alt="Vista previa de imagen" class="preview-img" />
            <a class="vista"><p id="preview-text" class="preview-text">Aquí aparecerá la descripción...</p></a>
        </div>
    </div>

    <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data" class="promo-form">
        @csrf

        <div class="drag-drop-area" id="drop-area">
            <input type="file" name="image" id="fileElem" accept="image/*" required hidden>
            <label for="fileElem" id="fileLabel">Arrastra y suelta la imagen o haz clic aquí</label>
        </div>

        <div class="text-area">
            <label for="editable">Descripción de la promoción</label>
            <div class="text-style-controls">
                <select id="font-family">
                   <option value="Montserrat">Montserrat</option>
                   <option value="Raleway">Raleway</option>
                   <option value="Open Sans">Open Sans</option>
                   <option value="Roboto">Roboto</option>
                   <option value="Lobster">Lobster</option>
                   <option value="Pacifico">Pacifico</option>
                   <option value="Bebas Neue">Bebas Neue</option>
                   <option value="Anton">Anton</option>
                   <option value="Playfair Display">Playfair Display</option>
                </select>
                <select id="font-size">
                    <option value="12px">12px</option>
                    <option value="16px" selected>16px</option>
                    <option value="20px">20px</option>
                    <option value="24px">24px</option>
                    <option value="28px">28px</option>
                </select>
                <button type="button" id="bold-btn">B</button>
                <button type="button" id="italic-btn"><i>I</i></button>
                <button type="button" id="underline-btn"><u>U</u></button>
                <input type="color" id="font-color" value="#ffffff" />
            </div>
            <div id="editable" class="editable-content" contenteditable="true"></div>
            <input type="hidden" name="text" id="hidden-text">
        </div>

        <button type="submit" class="submit-btn">SUBIR PROMOCIÓN</button>
    </form>
  </div>
 </div>
</main>
@endsection