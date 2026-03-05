@php
$isPersonalTraining = $instructor->services
    ->contains(fn($service) => $service->is_personal_training);

$className = $instructor->services->first()?->name ?? 'Class';

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
        
<section id="detailInstructor"
    class="section dark-background"
    data-is-pt="{{ $isPersonalTraining ? '1' : '0' }}">

    <div class="container">

        {{-- =========================
            MAIN TWO-COLUMN LAYOUT
        ========================== --}}
        <div class="row pt-main-layout">

            {{-- LEFT COLUMN --}}
            <div class="col-lg-5">

                <img 
                    src="{{ $instructor->photo }}" 
                    class="img-detail-coach rounded-4 mb-4"
                    alt="{{ $instructor->name }}">

                @if(!empty($certificates) || !empty($specialists))
                    <div class="pt-credential-card">

                        @if(!empty($certificates))
                            <h5 class="pt-credential-title">Certified</h5>
                            <ul class="pt-credential-list mb-4">
                                @foreach($certificates as $certificate)
                                    <li>{{ $certificate }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if(!empty($specialists))
                            <h5 class="pt-credential-title">Specialist</h5>
                            <ul class="pt-credential-list">
                                @foreach($specialists as $specialist)
                                    <li>{{ $specialist }}</li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                @endif

            </div>


            {{-- RIGHT COLUMN --}}
          <div class="col-lg-7 ms-lg-auto">

              {{-- Narrow Description Wrapper --}}
              <div class="pt-right-content">

                  @if(!$isPersonalTraining)
                      <x-frontend.class-meta
                          :level="$instructor->level_class"
                          :participants="$instructor->participants_number" />
                  @endif

                  <div class="coach-description mb-4">
                      {!! $instructor->description !!}
                  </div>

              </div>

              {{-- Session Grid (Full Width of col-lg-7) --}}
              @if($isPersonalTraining)
                  <div class="pt-offer-inline mb-4">

                      <h4 class="mb-4">Session Options</h4>

                      <form id="sessionForm">
                          <div class="pt-session-grid">

                              @if($instructor->price_4_sessions)
                                  <div class="pt-session-item">
                                      <input type="radio" id="session4" name="session" value="4" class="session-radio">
                                      <label class="session-card" for="session4">
                                          <h6>4 Sessions</h6>
                                          <p>Rp {{ number_format($instructor->price_4_sessions, 0, ',', '.') }}</p>
                                      </label>
                                  </div>
                              @endif

                              @if($instructor->price_8_sessions)
                                  <div class="pt-session-item">
                                      <input type="radio" id="session8" name="session" value="8" class="session-radio">
                                      <label class="session-card" for="session8">
                                          <h6>8 Sessions</h6>
                                          <p>Rp {{ number_format($instructor->price_8_sessions, 0, ',', '.') }}</p>
                                      </label>
                                  </div>
                              @endif

                              @if($instructor->price_16_sessions)
                                  <div class="pt-session-item">
                                      <input type="radio" id="session16" name="session" value="16" class="session-radio">
                                      <label class="session-card" for="session16">
                                          <h6>16 Sessions</h6>
                                          <p>Rp {{ number_format($instructor->price_16_sessions, 0, ',', '.') }}</p>
                                      </label>
                                  </div>
                              @endif

                              @if($instructor->price_24_sessions)
                                  <div class="pt-session-item">
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

              {{-- CTA Full Width --}}
              <div class="pt-cta-inline">
                  <x-frontend.whatsapp-button :text="$waText" />
              </div>

          </div>

        </div> {{-- END row --}}

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