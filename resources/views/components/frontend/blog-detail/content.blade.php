@props(['blog', 'blogs'])

<section class="section blog-detail">
    <div class="container blog-detail-container" data-aos="fade-up">

        <div class="blog-detail-layout">

            {{-- LEFT SIDE --}}
            <div class="blog-main">

                <h1 class="blog-detail-title">
                    {{ $blog->title }}
                </h1>

                <div class="blog-detail-meta">
                    <span>By {{ $blog->author }}</span>
                </div>

                @if ($blog->photo)
                    <img
                        src="{{ asset('storage/' . $blog->photo) }}"
                        class="blog-detail-image"
                        alt="{{ $blog->title }}"
                    >
                @endif

                <div class="blog-content">
                    {!! $blog->content !!}
                </div>

            </div>

            <aside class="blog-sidebar">
                <h4 class="blog-sidebar-title">Related Articles</h4>

                @foreach ($blogs as $item)
                    @if ($item->id !== $blog->id)
                        <a href="{{ route('frontend.blog.show', $item->slug) }}" class="blog-sidebar-item">

                            <img
                                src="{{ $item->photo
                                    ? asset('storage/' . $item->photo)
                                    : asset('frontend/assets/img/services-1.jpg') }}"
                                alt="{{ $item->title }}"
                            >

                            <p>{{ $item->title }}</p>

                        </a>
                    @endif
                @endforeach
            </aside>

        </div>

    </div>
</section>
