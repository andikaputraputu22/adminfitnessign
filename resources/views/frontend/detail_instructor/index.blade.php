<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-frontend.detail-instructor-hero>{{ $title }}</x-frontend.detail-instructor-hero>
    <x-frontend.detail-instructor-content :instructor="$instructor" :certificates="$certificates" :specialists="$specialists"></x-frontend.detail-instructor-content>
</x-frontend.frontend-layout>
