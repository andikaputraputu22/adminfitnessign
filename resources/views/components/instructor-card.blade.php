<div class="member">
    <div class="pic">
        <img
            src="{{ $image }}"
            alt="{{ $name }}"
            class="img-fluid"
            style="height: 420px; width: 100%; object-fit: cover;"
        >

    </div>

    <div class="member-info">
        <h4>{{ $name }}</h4>

        @isset($certified)
            <span>Certified : {{ $certified }}</span>
        @endisset

        @isset($specialist)
            <span>Specialist : {{ $specialist }}</span>
        @endisset

        @isset($class)
            <span>{{ $class }}</span>
        @endisset

        <div class="social">
            @isset($facebook)
                <a href="{{ $facebook }}"><i class="bi bi-facebook"></i></a>
            @endisset

            @isset($instagram)
                <a href="{{ $instagram }}"><i class="bi bi-instagram"></i></a>
            @endisset
        </div>
    </div>
</div>