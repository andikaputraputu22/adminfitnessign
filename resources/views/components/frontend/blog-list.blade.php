@props(['blogs'])
<section class="services section fitnessign-light-background">
    <div class="container title-description text-center" data-aos="fade-up">
        <p>
            Disini kami berbagi inspirasi seputar gaya hidup sehat, mulai dari tips menjaga kebugaran,
            panduan nutrisi, hingga kesehatan mental dan lifestyle.
        </p>
    </div>

    @if ($blogs->count())
        @foreach ($blogs as $blog)
            <div class="col-xl-4 col-md-6" data-aos="zoom-in">
                <div class="service-item">
                    <div class="img">
                        <img
                            src="{{ $blog->photo
                                ? asset('storage/' . $blog->photo)
                                : asset('frontend/assets/img/services-1.jpg') }}"
                            class="img-fluid"
                            alt="{{ $blog->title }}"
                        >
                    </div>

                    <div class="details position-relative">
                        <a href="{{ route('frontend.blog.show', $blog->slug) }}" class="stretched-link">
                            <h3 class="fitnessign-blog-title">
                                {{ $blog->title }}
                            </h3>
                        </a>

                        <p class="fitnessign-blog-description">
                            {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-12">
            <div class="text-center py-5" data-aos="fade-up">
                <h4>No articles yet</h4>
                <p class="text-muted">
                    We’re preparing new health & lifestyle content.  
                    Please check back soon.
                </p>
            </div>
        </div>
    @endif
</section>