<section id="detailInstructor" class="section dark-background">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT -->
      <div class="col-lg-4">
        <div class="coach-card">

          <img 
            src="{{ $instructor->photo }}"
            class="img-detail-coach rounded-4"
            alt="{{ $instructor->name }}"
          >

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

        @php
          $isPersonalTraining = $instructor->services
            ->contains(fn($service) => $service->is_personal_training);

          $className = $instructor->services->first()?->name ?? 'Class';
        @endphp


        <h2 class="coach-title coach-title-color">
          {{ $isPersonalTraining 
              ? 'FITNESSIGN PERSONAL TRAINING' 
              : 'CLASS ' . strtoupper($className) 
          }}
        </h2>

        @if(!$isPersonalTraining)
          <div class="class-meta d-flex gap-4 mt-3">
            <div class="meta-item">
              <i class="bi bi-star-fill text-success me-2"></i>
              {{ ucfirst($instructor->level_class) }}
            </div>
            <div class="meta-item">
              <i class="bi bi-people-fill text-success me-2"></i>
              Maks {{ $instructor->participants_number }} peserta
            </div>
          </div>
        @endif

        <div class="coach-description mt-3">
          {!! $instructor->description !!}
        </div>

        {{-- PERSONAL TRAINING --}}
        @if($isPersonalTraining)
        <form 
          action="https://wa.me/6289637883174"
          method="GET"
          target="_blank"
          class="mt-4"
        >
          <input type="hidden" name="text" value="Halo Admin Fitnessign

Saya tertarik untuk Personal Training.

Coach:
{{ $instructor->name }}

Level:
{{ $trainingLevel }}

Pilihan paket tersedia:
- 4 sesi
- 8 sesi
- 16 sesi
- 24 sesi

Mohon info detail dan rekomendasi paket.
">
          <button class="btn btn-success px-4 py-2">
            BOOK NOW
          </button>
        </form>
        @endif

        {{-- INSTRUCTOR CLASS --}}
        @if(!$isPersonalTraining)
        <form 
          action="https://wa.me/6289637883174"
          method="GET"
          target="_blank"
          class="mt-4"
        >
          <input type="hidden" name="text" value="Halo Admin Fitnessign

Saya ingin mendaftar kelas.

Class:
{{ $className }}

Coach:
{{ $instructor->name }}

Level:
{{ ucfirst($instructor->level_class) }}

Mohon info jadwal dan biaya.
">
          <button class="btn btn-success px-4 py-2">
            BOOK NOW
          </button>
        </form>
        @endif

      </div>
    </div>
  </div>
</section>
