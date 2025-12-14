<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img style="max-height: 45px;" src="{{ asset('frontend/assets/img/FITNESSIGN_WHITE.png') }}" alt="FITNESSIGN Logo" class="logo-img">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul class="fitnessign-text-green">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Health</a></li>
                <li class="dropdown"><a href="#"><span>Personal Training</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('frontend.trainer', ['service' => 'advanced']) }}">ADVANCED</a></li>
                        <li><a href="{{ route('frontend.trainer', ['service' => 'prime']) }}">PRIME</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Instructor Class</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        @foreach ($services as $service)
                        <li><a href="{{ route('frontend.instructor', ['service' => Str::slug($service->name)]) }}">{{ strtoupper($service->name) }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#about">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>