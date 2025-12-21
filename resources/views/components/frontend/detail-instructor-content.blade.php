<section id="detailInstructor" class="section dark-background">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT: PHOTO + INFO -->
      <div class="col-lg-4">
        <div class="coach-card">
          <img src="{{ asset('storage/'.$instructor->photo) }}" class="img-fluid rounded-4">

          <h5 class="coach-name mt-3">{{ $instructor->name }}</h5>

          <div class="coach-block">
            <h6>Certified</h6>
            {!! $instructor->certificate !!}
          </div>

          <div class="coach-block">
            <h6>Specialist</h6>
            {!! $instructor->specialist !!}
          </div>
        </div>
      </div>

      <!-- RIGHT: CONTENT -->
      <div class="col-lg-8">
        <h2 class="coach-title">
          FITNESSIGN PERSONAL TRAINING
        </h2>

        <div class="coach-description">
          {!! $instructor->description !!}
        </div>

          <a href="https://wa.me/62XXXXXXXX" class="btn btn-success mt-3">
            BOOK NOW
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
