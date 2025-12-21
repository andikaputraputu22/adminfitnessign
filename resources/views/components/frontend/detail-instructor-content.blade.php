<section id="detailInstructor" class="team section fitnessign-light-background">
    <div class="container">
        <div data-aos="fade-up" data-aos-delay="200">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1 d-flex justify-content-end">
                    <img src="{{ asset($instructor->photo) }}" alt="" class="img-fluid about-img">
                </div>
                <div class="col-lg-8 order-1 order-lg-2 d-flex align-items-center">
                    <p class="about-text">
                        {{ strip_tags($instructor->description) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>