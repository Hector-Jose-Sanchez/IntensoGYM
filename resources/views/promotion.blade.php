@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Subir nueva promoción</h2>

    @if (session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="image">Imagen:</label>
            <input type="file" name="image" required>
        </div>

        <div>
            <label for="text">Descripción:</label>
            <input type="text" name="text" required>
        </div>

        <button type="submit">Subir</button>
    </form>
</div>
@endsection
