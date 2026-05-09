<section id="detailInstructor" class="section dark-background">
    <div class="container">
        <div class="row pt-main-layout g-4">

            {{-- LEFT --}}
            <x-frontend.instructor.detail.sidebar
                :instructor="$instructor"
                :certificates="$certificates"
                :specialists="$specialists"
            />

            {{-- RIGHT --}}
            <x-frontend.instructor.detail.main
                :instructor="$instructor"
                :service="$service"
                :isPersonalTraining="$isPersonalTraining"
                :waText="$waText"
            />

        </div>
    </div>
</section>