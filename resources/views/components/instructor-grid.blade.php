@php
    $get = fn ($obj, $key) =>
        is_array($obj)
            ? ($obj[$key] ?? null)
            : ($obj->$key ?? null);
@endphp

<div class="container">
    <div class="row gy-5">
        @foreach ($instructors as $instructor)
            <div
                class="col-lg-4 col-md-6"
                data-aos="fade-up"
                data-aos-delay="{{ ($loop->index + 1) * 100 }}"
            >
                <x-instructor-card
                    :image="$get($instructor, 'image')"
                    :name="$get($instructor, 'name')"
                    :certified="$get($instructor, 'certified')"
                    :specialist="$get($instructor, 'specialist')"
                    :class="$get($instructor, 'class_name')"
                    :instagram="$get($instructor, 'instagram')"
                    :facebook="$get($instructor, 'facebook')"
                />

            </div>
        @endforeach
    </div>
</div>