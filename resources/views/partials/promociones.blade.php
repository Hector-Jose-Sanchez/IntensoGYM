<div class="promo-carousel">
    <div class="carousel-container">
        @php
            $imagenes = File::glob(public_path('imagen/promociones/*.{jpg,png,jpeg}'), GLOB_BRACE);
        @endphp

        @foreach($imagenes as $index => $imagen)
            <img class="carousel-slide {{ $index === 0 ? 'active' : '' }}" src="{{ asset('imagen/promociones/' . basename($imagen)) }}" alt="Promoción {{ $index + 1 }}">
        @endforeach

        <button class="carousel-btn prev">&#10094;</button>
        <button class="carousel-btn next">&#10095;</button>
    </div>
</div>
