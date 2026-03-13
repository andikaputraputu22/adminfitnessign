<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-frontend.detail-health-hero
        :title="$service->name"
        :image="$service->photo"
    />
    
    <x-frontend.detail-health-content :blog="$blog" />

</x-frontend.frontend-layout>