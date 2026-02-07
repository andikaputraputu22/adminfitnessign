<x-frontend.frontend-layout>
    @php
        $heroImage = str_contains(strtolower($title), 'prime')
            ? asset('frontend/assets/img/page-trainer-putu.jpg')
            : asset('frontend/assets/img/page-trainer-rud.jpg');
    @endphp

    <x-frontend.instructor-hero
        :title="$title"
        :image="$heroImage"
    />

    <section id="team" class="team section fitnessign-light-background">
        <x-instructor-grid :instructors="$instructors" />
    </section>
    
</x-frontend.frontend-layout>
