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

    <x-frontend.coach-list :instructors="$instructors"></x-frontend.coach-list>
</x-frontend.frontend-layout>
