@props([
    'instructor' => null,

    // legacy props (temporary, for backward compatibility)
    'image' => null,
    'name' => null,
    'certified' => null,
    'specialist' => null,
    'class' => null,
    'instagram' => null,
    'facebook' => null,
])

@php
    /**
     * Normalize data source
     * Prefer instructor object, fallback to legacy props
     */
    $src = $instructor ?? (object) [];

    // Canonical frontend fields
    $photo = $image ?? $src->photo ?? null;
    $displayName = $name ?? $src->name ?? null;

    $certificate =
        $certified
        ?? $src->certificate
        ?? $src->certified
        ?? null;

    $specialistName =
        $specialist
        ?? $src->specialist
        ?? $src->specialists
        ?? null;

    $className =
        $class
        ?? $src->class_name
        ?? null;

    $instagramUrl = $instagram ?? $src->instagram ?? null;
    $facebookUrl = $facebook ?? $src->facebook ?? null;
@endphp

<div class="instructor-card text-center">
    <a 
        href="{{ route('frontend.detail_instructor', $src->slug ?? '') }}" 
        class="stretched-link"
    ></a>

    <div class="instructor-avatar">
        <img
            src="{{ $photo }}"
            alt="{{ $displayName }}"
        >
    </div>

    <div class="instructor-content">
        <h4 class="instructor-name">{{ $displayName }}</h4>

        @php
            $cardMeta =
                $specialistName
                ?? $className
                ?? $certificate
                ?? 'Fitness Coach';
        @endphp

        <p class="instructor-specialist">
            {{ $cardMeta }}
        </p>
        
    </div>
</div>
