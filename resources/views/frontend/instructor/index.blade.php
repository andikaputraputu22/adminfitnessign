<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-frontend.instructor-hero
        :title="$title"
        :image="$service->photo" />

    {{-- LIST + INTRO MUST SHARE THE SAME SECTION --}}
    <section id="team" class="team section fitnessign-light-background">
        <div class="container title-description text-justify mb-4" data-aos="fade-up">
            <p>{{ $service->description }}</p>
        </div>
        <x-instructor-grid :instructors="$instructors" />
    </section>
</x-frontend.frontend-layout>