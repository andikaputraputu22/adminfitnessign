<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-frontend.frontend-hero></x-frontend.frontend-hero>
    <x-frontend.frontend-instructor :personalTrainers="$personalTrainers" :classInstructors="$classInstructors"></x-frontend.frontend-instructor>
    <x-frontend.frontend-about></x-frontend.frontend-about>
    <x-frontend.pricing></x-frontend.pricing>
</x-frontend.frontend-layout>
