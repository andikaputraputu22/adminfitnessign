@php
    $get = fn ($obj, $key) =>
        is_array($obj)
            ? ($obj[$key] ?? null)
            : ($obj->$key ?? null);
@endphp

<div class="container">
    <div class="row gy-4 justify-content-center">
        @foreach ($instructors as $instructor)
            <div
                class="col-6 col-md-6 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="{{ ($loop->index + 1) * 100 }}"
            >
                <x-frontend.instructor-card
                    :instructor="$instructor"
                />
            </div>
        @endforeach
    </div>
</div>