<x-frontend.frontend-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @php
    $isPersonalTraining = $instructor->services
        ->contains(fn($service) => $service->is_personal_training);

    $className = $instructor->services->first()?->name ?? 'Class';

    $waText = '';

    if ($isPersonalTraining) {

        $waText = <<<TEXT
Halo Coach!

Saya tertarik untuk daftar Private Training bersama Coach {$instructor->name} dengan __SESSION__ bersama *Fitnessign*.

Tolong info ketersediaan jadwal Coach {$instructor->name} & detail latihan yang cocok dengan saya.

Terima kasih! 🏋️‍♂️

(Isi data Anda)

Nama :
No.tlp :
Umur :
Domisili :
Riwayat cidera :
Goals Training :
TEXT;

    } else {

        $waText = <<<TEXT
Halo Coach!

Saya tertarik untuk mengikuti {$className} bersama Coach {$instructor->name} melalui *Fitnessign*.

Mohon info jadwal kelas dan detail pendaftarannya.

Terima kasih! 🏋️‍♂️

(Isi data Anda)

Nama :
No.tlp :
Umur :
Domisili :
TEXT;

    }
@endphp

    <x-frontend.instructor-hero
        :title="$service->name"
        :image="$service->photo"
    />

    <x-frontend.instructor.detail.content
        :instructor="$instructor"
        :service="$service"
        :certificates="$certificates"
        :specialists="$specialists"
        :isPersonalTraining="$isPersonalTraining"
        :waText="$waText"
    />

</x-frontend.frontend-layout>