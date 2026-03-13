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


<section id="detailInstructor" class="section dark-background">

<div class="container">

<div class="row pt-main-layout">

    {{-- LEFT COLUMN --}}
    <div class="col-lg-5">

        <img
            src="{{ $instructor->photo }}"
            class="img-detail-coach rounded-4 mb-3"
            alt="{{ $instructor->name }}">

        <div class="pt-coach-name">
            {{ strtoupper($instructor->name) }}
        </div>

        @if($certificates || $specialists)

        <div class="pt-credential-card">

            @if($certificates)
            <h5 class="pt-credential-title">Certified</h5>

            <ul class="pt-credential-list mb-4">
                @foreach($certificates as $certificate)
                <li>{{ $certificate }}</li>
                @endforeach
            </ul>
            @endif

            @if($specialists)
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
    <div class="col-lg-7">

        <div class="coach-description mb-5">
            {!! $instructor->description !!}
        </div>

        @if($isPersonalTraining)

        <h4 class="mb-3">Session Options</h4>

        <form id="sessionForm">

            <div class="pt-session-grid">

                @foreach([
                4 => $instructor->price_4_sessions,
                8 => $instructor->price_8_sessions,
                16 => $instructor->price_16_sessions,
                24 => $instructor->price_24_sessions
                ] as $session => $price)

                @if($price)

                <div class="pt-session-item">

                    <input
                        type="radio"
                        id="session{{ $session }}"
                        name="session"
                        value="{{ $session }}"
                        class="session-radio">

                    <label class="session-card" for="session{{ $session }}">

                        <h6>{{ $session }} Sessions</h6>

                        <p>Rp {{ number_format($price,0,',','.') }}</p>

                    </label>

                </div>

                @endif
                @endforeach

            </div>

        </form>

        @endif


        <div class="pt-cta-inline mt-4">
            <x-frontend.whatsapp-button :text="$waText" />
        </div>

    </div>

</div>

</div>

</section>