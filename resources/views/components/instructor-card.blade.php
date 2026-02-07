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

<div class="member">
    <div class="pic">
        <img
            src="{{ $photo }}"
            alt="{{ $displayName }}"
            class="img-fluid"
            style="height: 420px; width: 100%; object-fit: cover;"
        >
    </div>

    <div class="member-info">
        <h4>{{ $displayName }}</h4>

        @if($certificate)
            <span>Certified : {{ $certificate }}</span>
        @endif

        @if($specialistName)
            <span>Specialist : {{ $specialistName }}</span>
        @endif

        @if($className)
            <span>{{ $className }}</span>
        @endif

        <div class="social">
            @if($facebookUrl)
                <a href="{{ $facebookUrl }}">
                    <i class="bi bi-facebook"></i>
                </a>
            @endif

            @if($instagramUrl)
                <a href="{{ $instagramUrl }}">
                    <i class="bi bi-instagram"></i>
                </a>
            @endif
        </div>
    </div>
</div>
