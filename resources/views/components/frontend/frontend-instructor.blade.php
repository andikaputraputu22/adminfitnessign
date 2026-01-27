@props(['personalTrainers', 'classInstructors'])
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

