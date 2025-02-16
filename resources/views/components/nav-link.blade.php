@props(['active' => false])

<a {{ $attributes }} href="/" class="nav-link {{ $active ? 'active' : '' }}">
    {{ $icon }}
    <p>{{ $slot }}</p>
</a>