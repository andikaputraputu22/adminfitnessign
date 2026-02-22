@php
$isPersonalTraining = $instructor->services
->contains(fn($service) => $service->is_personal_training);

$className = $instructor->services->first()?->name ?? 'Class';
@endphp
<section id="detailInstructor" class="section dark-background" data-is-pt="{{ $isPersonalTraining ? '1' : '0' }}">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT -->
      <div class="col-lg-4">
        <div class="coach-card">

          <img
            src="{{ $instructor->photo }}"
            class="img-detail-coach rounded-4"
            alt="{{ $instructor->name }}">

          <div class="profile-card rounded-4 mt-3">
            <h5 class="coach-name text-center mb-3">
              {{ $instructor->name }}
            </h5>

            <hr class="divider-line">

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
      </div>

      <!-- RIGHT -->
      <div class="col-lg-8">
        <h5 class="text-uppercase text-fg-green mb-2">
          {{ $isPersonalTraining 
              ? 'Personal Trainer' 
              : 'CLASS ' . strtoupper($className) 
          }}
        </h5>

        @if(!$isPersonalTraining)
        <x-frontend.class-meta
          :level="$instructor->level_class"
          :participants="$instructor->participants_number" />
        @endif

        <div class="coach-description mt-3">
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

        @php
        $waNumber = '6289637883174';

        if ($isPersonalTraining) {
        $waText = <<<TEXT
          Halo Admin Fitnessign

          Saya tertarik untuk Personal Training.

          Coach:
          {$instructor->name}

          Pilihan paket:
          __SESSION__

          Mohon info detail dan rekomendasi paket yang cocok. Terima kasih.
          TEXT;
          }
          else {

          $waText = <<<TEXT
            Halo Admin Fitnessign

            Saya ingin mendaftar kelas.

            Class:
            {$className}

            Coach:
            {$instructor->name}

            Level:
            {$instructor->level_class}

            Mohon info jadwal dan biaya kelas. Terima kasih.
            TEXT;

            }
            @endphp

            <x-frontend.whatsapp-button :text="$waText" />


      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    const section = document.getElementById("detailInstructor");
    const isPT = section.dataset.isPt === "1";

    const btn = document.getElementById("waSubmit");
    const input = document.getElementById("waTextInput");

    if (!btn) return;

    btn.addEventListener("click", function(e) {

      if (!isPT) return;

      const selected = document.querySelector('input[name="session"]:checked');

      if (!selected) {
        e.preventDefault();
        alert("Pilih paket session dulu");
        return;
      }

      const baseText = input.dataset.baseText;
      const session = selected.value + " sesi";

      input.value = baseText.replace("__SESSION__", session);
    });

  });
</script>