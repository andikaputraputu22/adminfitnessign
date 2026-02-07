<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @php
        $heroImage = asset('frontend/assets/img/hero-bg-gym.jpg');

        if (request()->route('service')) {
            /** @var \App\Models\Service $service */
            $service = request()->route('service');

            $heroImage = match ($service->slug) {
                'aerobic' =>
                    asset('frontend/assets/img/header-image-aerobic.jpg'),

                'pectoralis-exercise' =>
                    asset('frontend/assets/img/header-image-body-combat.jpg'),

                default =>
                    asset('frontend/assets/img/hero-bg-gym.jpg'),
            };
        }
    @endphp

    <x-frontend.instructor-hero
        :title="$title"
        :image="$heroImage"
    />

    @php
        $introText = null;

        if (request()->route('service')) {
            /** @var \App\Models\Service $service */
            $service = request()->route('service');

            $introText = match ($service->slug) {
                'poundfit' =>
                    'Nikmati pengalaman fitness penuh energi dengan kelas PoundFit. Dirancang untuk meningkatkan stamina, koordinasi, dan mood kamu melalui gerakan ritmis yang powerful. Poundfit olahraga yang mulai populer di Amerika Serikat pada tahun 2011 yang dipopulerkan oleh Kirsten Potenza dan Cristina Preenboom. Dalam kelas PoundFit, peserta menggunakan Ripstix stick drum khusus yang lebih ringan dari stick drum biasa. Kelas ini bisa diikuti oleh 20+ peserta.',

                'zumba' =>
                    'Kelas Zumba membawa kamu ke dunia penuh irama, di mana setiap gerakan membawa kebugaran dan kebahagiaan. Dengan kombinasi dance, cardio, dan kekuatan tubuh, Zumba bukan hanya latihan fisik, tapi juga pelepasan energi yang menyegarkan pikiran. Cocok untuk siapa pun yang ingin fit, happy, dan percaya diri dengan cara yang menyenangkan.',

                'aerobic' =>
                    'Kelas Aerobic adalah latihan kebugaran yang memadukan musik upbeat, gerakan dinamis, dan suasana penuh semangat. Cocok untuk semua usia dan level kebugaran. Setiap sesi dipandu oleh instruktur berpengalaman untuk membantu kamu mencapai hasil maksimal dengan teknik yang benar.',

                'body-combat' =>
                    'Kelas Body Combat adalah latihan intens yang terinspirasi dari berbagai seni bela diri seperti karate, taekwondo, boxing, dan muay thai tanpa kontak fisik. Gerakan cepat dan musik menghentak membantu membakar kalori, memperkuat otot, dan meningkatkan rasa percaya diri.',

                default => null,
            };
        }
    @endphp

    {{-- LIST + INTRO MUST SHARE THE SAME SECTION --}}
    <section id="team" class="team section fitnessign-light-background">

        @if($introText)
            <div class="container title-description text-justify mb-4" data-aos="fade-up">
                <p>{{ $introText }}</p>
            </div>
        @endif

        <x-instructor-grid :instructors="$instructors" />

    </section>

</x-frontend.frontend-layout>
