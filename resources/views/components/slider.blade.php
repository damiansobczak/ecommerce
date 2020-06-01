<div class="slider">
    <img src="{{ asset('images/slider.jpg')}}" alt="" class="slider__background">
    <div class="slider__container">
        <div class="slider__content">
            <h1 class="slider__title">{{ $title }}</h1>
            <p class="slider__text">{{ $text }}</p>
        </div>
        <img src="{{ $image }}" alt="" class="slider__image">
    </div>
</div>