@props([
    'title',
    'image'
])

<section id="hero" class="hero section dark-background">
    <img src="{{ asset('storage/' . $image) }}" alt="{{ $title }}" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">
            {{ $title }}
        </h2>
    </div>
</section>
