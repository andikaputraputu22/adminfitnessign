<x-frontend.frontend-layout>
    <x-slot:title>{{ $blog->title }}</x-slot:title>

    <section class="section blog-detail">
        <div class="container" data-aos="fade-up">

            <h1 class="mb-3">{{ $blog->title }}</h1>

            <div class="mb-4 text-muted">
                <span>By {{ $blog->author }}</span>
            </div>

            @if ($blog->photo)
                <img
                    src="{{ asset('storage/' . $blog->photo) }}"
                    class="img-fluid rounded mb-4"
                    alt="{{ $blog->title }}"
                >
            @endif

            <div class="blog-content">
                {!! $blog->content !!}
            </div>

        </div>
    </section>
</x-frontend.frontend-layout>