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

    <x-frontend.coach-list :instructors="$instructors" />
</x-frontend.frontend-layout>
