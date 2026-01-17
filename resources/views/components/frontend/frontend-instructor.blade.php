@php
$personalTrainers = [
    [
        'image' => '/frontend/assets/img/team/FOTO PT BACKGROUND.jpeg',
        'name' => 'Coach A',
        'certified' => 'NASM',
        'specialist' => 'Weight Training',
        'instagram' => '#',
    ],
    [
        'image' => '/frontend/assets/img/team/PERSONAL TRAINER WANITA.jpg',
        'name' => 'Coach B',
        'certified' => 'ACE',
        'specialist' => 'Cardio',
        'instagram' => '#',
    ],
    [
        'image' => '/frontend/assets/img/team/personal PT3.jpg',
        'name' => 'Coach C',
        'certified' => 'ISSA',
        'specialist' => 'Strength',
        'instagram' => '#',
    ],
];
@endphp

@php
$classInstructors = [
    [
        'image' => '/frontend/assets/img/team/poundfit JPG.jpg',
        'name' => 'Coach D',
        'class' => 'POUND FIT',
        'instagram' => '#',
    ],
    [
        'image' => '/frontend/assets/img/team/ZUMBA JPG.jpg',
        'name' => 'Coach E',
        'class' => 'ZUMBA',
        'instagram' => '#',
    ],
    [
        'image' => '/frontend/assets/img/team/AEROBIC JPG.jpg',
        'name' => 'Coach F',
        'class' => 'AEROBIC',
        'instagram' => '#',
    ],
];
@endphp

<section class="team section fitnessign-light-background">
    <x-section-header
        title="Personal Training"
        subtitle="Check our personal training"
    />

    <x-instructor-grid :instructors="$personalTrainers" />
</section>

<section class="team section fitnessign-light-background">
    <x-section-header
        title="Instructor Class"
        subtitle="Check our instructor class"
    />

    <x-instructor-grid :instructors="$classInstructors" />
</section>

