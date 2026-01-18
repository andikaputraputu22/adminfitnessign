<section id="services" class="services section fitnessign-light-background">
    <div class="container title-description text-center" data-aos="fade-up">
        <p>Disini kami berbagi inspirasi seputar gaya hidup sehat, mulai dari tips menjaga kebugaran, panduan nutrisi, hingga kesehatan mental, kesehatan umum dan lifestyle Usia lanjut.</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
            @foreach($blogs as $blog)
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ Storage::url($blog->photo) }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <a href="{{ route('frontend.detail_health') }}" class="stretched-link">
                            <h3 class="fitnessign-blog-title">{{ $blog->title }}</h3>
                        </a>
                        <p class="fitnessign-blog-description">{{ strip_tags($blog->content) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>