<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-frontend.instructor-hero
        :title="$instructor->name"
        :image="$instructor->photo"
    />

    <x-frontend.detail-instructor-content
        :instructor="$instructor"
        :certificates="$certificates"
        :specialists="$specialists"
    />
</x-frontend.frontend-layout>
