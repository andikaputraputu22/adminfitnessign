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

<div class="member position-relative">
    <a 
        href="{{ route('frontend.detail_instructor', $src->slug ?? '') }}" 
        class="stretched-link"
    ></a>

    <div class="pic">
        <img
            src="{{ $photo }}"
            alt="{{ $displayName }}"
            class="img-fluid member-img"
        >
    </div>

    <div class="member-info">
        <h4 class="member-name">{{ $displayName }}</h4>

        @if($specialistName)
            <p class="member-specialist">
                {{ $specialistName }}
            </p>
        @endif
    </div>
</div>
