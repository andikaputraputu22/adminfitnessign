@props([
    'title',
    'image'
])

<section id="hero" class="hero section dark-background position-relative">

    <img 
        src="{{ $image ? asset('storage/' . $image) : asset('images/default-hero.jpg') }}"
        alt="{{ $title }}" 
        class="hero-bg"
        data-aos="fade-in"
    >

    <div class="hero-overlay"></div>

    <div class="container d-flex flex-column align-items-center justify-content-center text-center hero-content">
        <h2 data-aos="fade-up" data-aos-delay="100">
            {{ $title }}
        </h2>
    </div>

</section>
