<div class="container">
    <div class="row gy-5">
        @foreach ($instructors as $instructor)
            <div
                class="col-lg-4 col-md-6"
                data-aos="fade-up"
                data-aos-delay="{{ ($loop->index + 1) * 100 }}"
            >
                <x-instructor-card
                    :image="$instructor['image']"
                    :name="$instructor['name']"
                    :certified="$instructor['certified'] ?? null"
                    :specialist="$instructor['specialist'] ?? null"
                    :class="$instructor['class'] ?? null"
                    :facebook="$instructor['facebook'] ?? null"
                    :instagram="$instructor['instagram'] ?? null"
                />
            </div>
        @endforeach
    </div>
</div>