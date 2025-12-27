<section id="detailInstructor" class="section dark-background">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT: PHOTO + BASIC INFO -->
      <div class="col-lg-4">
        <div class="coach-card">

          {{-- Coach Photo --}}
          <img 
            src="{{($instructor->photo) }}"
            class="img-fluid rounded-4"
            alt="{{ $instructor->name }}"
          >

          <h5 class="coach-name mt-3">{{ $instructor->name }}</h5>

          {{-- Certificate --}}
          @if(!empty($certificates))
            <div class="coach-block">
              <h6>Certified</h6>
              <ul>
                @foreach($certificates as $certificate)
                  <li>{{ $certificate }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          {{-- Specialist --}}
          @if(!empty($specialists))
            <div class="coach-block">
              <h6>Specialist</h6>
              <ul>
                @foreach($specialists as $specialist)
                  <li>{{ $specialist }}</li>
                @endforeach
              </ul>
            </div>
          @endif

        </div>
      </div>

      <!-- RIGHT: CONTENT -->
      <div class="col-lg-8">

        {{-- Detect Personal Training --}}
        @php
          $isPersonalTraining = $instructor->services
            ->contains(fn($service) => $service->is_personal_training);
        @endphp

        {{-- Title --}}
        <h2 class="coach-title">
          {{ $isPersonalTraining ? 'FITNESSIGN PERSONAL TRAINING' : 'FITNESSIGN INSTRUCTOR CLASS' }}
        </h2>

        {{-- Description --}}
        <div class="coach-description">
          {!! $instructor->description !!}
        </div>

      {{-- SESSION OPTION BOX (ONLY FOR PERSONAL TRAINING) --}}
      @if($isPersonalTraining)
        <div class="session-box mt-5">
          <h4 class="mb-3">Session Options</h4>

    <form id="sessionForm">
      <div class="row g-3">

        @if($instructor->price_4_sessions)
        <div class="col-md-3 col-6">
          <input type="radio" id="session4" name="session" value="4" class="session-radio">
          <label class="session-card" for="session4">
            <h6>4 Sessions</h6>
            <p>Rp {{ number_format($instructor->price_4_sessions, 0, ',', '.') }}</p>
          </label>
        </div>
        @endif


        @if($instructor->price_8_sessions)
        <div class="col-md-3 col-6">
          <input type="radio" id="session8" name="session" value="8" class="session-radio">
          <label class="session-card" for="session8">
            <h6>8 Sessions</h6>
            <p>Rp {{ number_format($instructor->price_8_sessions, 0, ',', '.') }}</p>
          </label>
        </div>
        @endif

        @if($instructor->price_16_sessions)
        <div class="col-md-3 col-6">
          <input type="radio" id="session16" name="session" value="16" class="session-radio">
          <label class="session-card" for="session16">
            <h6>16 Sessions</h6>
            <p>Rp {{ number_format($instructor->price_16_sessions, 0, ',', '.') }}</p>
          </label>
        </div>
        @endif

        @if($instructor->price_24_sessions)
        <div class="col-md-3 col-6">
          <input type="radio" id="session24" name="session" value="24" class="session-radio">
          <label class="session-card" for="session24">
            <h6>24 Sessions</h6>
            <p>Rp {{ number_format($instructor->price_24_sessions, 0, ',', '.') }}</p>
          </label>
        </div>
        @endif

      </div>
    </form>
  </div>
@endif

        {{-- BOOK NOW --}}
        <a href="https://wa.me/62XXXXXXXX" class="btn btn-success mt-4">
          BOOK NOW
        </a>
      </div>

    </div>
  </div>
</section>
