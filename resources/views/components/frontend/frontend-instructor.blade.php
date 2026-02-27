@props(['personalTrainers', 'classInstructors'])
<section class="team section fitnessign-light-background">
    <x-section-header
        title="Personal Training"
        subtitle="Check our personal training"
    />

    <x-frontend.instructor-grid :instructors="$personalTrainers" />
</section>

<section class="team section fitnessign-light-background">
    <x-section-header
        title="Instructor Class"
        subtitle="Check our instructor class"
    />

    <x-frontend.instructor-grid :instructors="$classInstructors" />
</section>

