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


        <h5 class="text-uppercase text-fg-green mb-2">
          {{ $isPersonalTraining 
              ? 'Personal Trainer' 
              : 'CLASS ' . strtoupper($className) 
          }}
        </h5>

        @if(!$isPersonalTraining)
          <x-frontend.class-meta 
            :level="$instructor->level_class"
            :participants="$instructor->participants_number"
          />
        @endif

        <div class="coach-description mt-3">
          {!! $instructor->description !!}
        </div>


        @php
          $waNumber = '6289637883174';

          if ($isPersonalTraining) {
            $waText = "Halo Admin Fitnessign

            Saya tertarik untuk Personal Training.

            Coach:
            {$instructor->name}

            Pilihan paket:
            - 4 sesi
            - 8 sesi
            - 16 sesi
            - 24 sesi

            Mohon info detail dan rekomendasi paket yang cocok. Terima kasih.";
          } 
            else {
            $waText = "Halo Admin Fitnessign

            Saya ingin mendaftar kelas.

            Class:
            {$className}

            Coach:
            {$instructor->name}

            Level:
            " . ucfirst($instructor->level_class) . "

            Mohon info jadwal dan biaya kelas. Terima kasih.";
          }
        @endphp

        <x-frontend.whatsapp-button :text="$waText" />


      </div>
    </div>
  </div>
</section>
