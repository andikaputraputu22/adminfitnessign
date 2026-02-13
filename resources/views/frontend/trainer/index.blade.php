<x-frontend.frontend-layout>
    <x-slot:title>{{ $service->name }}</x-slot:title>

    <x-frontend.instructor-hero
        :title="$service->name"
        :image="$service->photo"/>

    <section id="team" class="team section fitnessign-light-background">

        @if($service->description)
            <div class="container title-description text-justify mb-4" data-aos="fade-up">
                <p>{{ $service->description }}</p>
            </div>
        @endif

        <x-instructor-grid :instructors="$instructors" />

    </section>
</x-frontend.frontend-layout>
