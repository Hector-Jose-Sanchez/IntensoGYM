<div class="promo-carousel" id="promo-carousel">
    <div class="carousel-container">
        @foreach($promotions->take(5) as $promotion)
            <div class="carousel-slide">
                <img src="{{ asset('storage/' . $promotion->image) }}" alt="Promo">
                <div class="promo-text">{!! $promotion->text !!}</div>
            </div>
        @endforeach

        <button class="carousel-btn prev">&#10094;</button>
        <button class="carousel-btn next">&#10095;</button>
    </div>
</div>
