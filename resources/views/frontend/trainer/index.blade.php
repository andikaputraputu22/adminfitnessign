<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @php
        $heroImage = str_contains(strtolower($title), 'prime')
            ? asset('frontend/assets/img/page-trainer-putu.jpg')
            : asset('frontend/assets/img/page-trainer-rud.jpg');
    @endphp

    <x-frontend.instructor-hero
        :title="$title"
        :image="$heroImage"
    />

    @php
        $introText = match (strtolower($title)) {
            'advanced' =>
                'Personal Training Advanced Fitnessign ditangani oleh para profesional berpengalaman lebih dari 3 tahun di bidang kebugaran. Setiap program disesuaikan dengan kebutuhan dan level kamu untuk mencapai tujuan kesehatan dan performa terbaik.',

            'prime' =>
                'Personal Training Prime Fitnessign ditangani oleh profesional berpengalaman lebih dari 10 tahun di bidang kebugaran, fisioterapi, dan hidroterapi. Program latihan dan sesi nutrisi dirancang secara eksklusif untuk hasil maksimal.',

            default => null,
        };
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
