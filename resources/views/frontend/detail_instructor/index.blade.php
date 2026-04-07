<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @php
        $isPersonalTraining = $instructor->services
            ->contains(fn($service) => $service->is_personal_training);

        $className = $instructor->services->first()?->name ?? 'Class';

        if ($isPersonalTraining) {
            $waText = <<<TEXT
Halo Admin Fitnessign

Saya tertarik untuk Personal Training.

Coach:
{$instructor->name}

Pilihan paket:
__SESSION__

Mohon info detail dan rekomendasi paket yang cocok. Terima kasih.
TEXT;
        } else {
            $waText = <<<TEXT
Halo Admin Fitnessign

Saya ingin mendaftar kelas.

Class:
{$className}

Coach:
{$instructor->name}

Level:
{$instructor->level_class}

Mohon info jadwal dan biaya kelas. Terima kasih.
TEXT;
        }
    @endphp

    <x-frontend.instructor-hero
        :title="$service->name"
        :image="$service->photo"
    />

    <x-frontend.instructor.detail.content
        :instructor="$instructor"
        :certificates="$certificates"
        :specialists="$specialists"
        :isPersonalTraining="$isPersonalTraining"
        :waText="$waText"
    />

</x-frontend.frontend-layout>