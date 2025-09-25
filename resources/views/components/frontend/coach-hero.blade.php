<section id="hero" class="hero section dark-background">
    @if(request()->is('trainer/advance'))
        <img src="{{ asset('frontend/assets/img/page-trainer-advanced.jpg') }}" alt="" data-aos="fade-in">
    @elseif(request()->is('trainer/prime'))
        <img src="{{ asset('frontend/assets/img/page-trainer-prime.jpg') }}" alt="" data-aos="fade-in">
    @else
        <img src="{{ asset('frontend/assets/img/hero-bg-gym.jpg') }}" alt="" data-aos="fade-in">
    @endif
    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">{{ $slot }}</h2>
    </div>
</section>
