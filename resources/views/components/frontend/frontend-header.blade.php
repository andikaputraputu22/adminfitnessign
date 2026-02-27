<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <img style="max-height: 45px;" src="{{ asset('frontend/assets/img/FITNESSIGN_WHITE.png') }}" alt="FITNESSIGN Logo" class="logo-img">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul class="fitnessign-text-green">

                <li>
                    <a href="{{ route('frontend.home') }}"
                    class="{{ request()->routeIs('frontend.home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('frontend.blog') }}"
                    class="{{ request()->routeIs('frontend.blog*') ? 'active' : '' }}">
                        Health
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#"
                    class="{{ request()->routeIs('frontend.trainer') ? 'active' : '' }}">
                        <span>Personal Training</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>

                    <ul>
                        @foreach ($services->where('is_personal_training', 1) as $service)
                            <li>
                                <a href="{{ route('frontend.trainer', ['service' => $service->slug]) }}"
                                class="{{ request('service') === $service->slug && request()->routeIs('frontend.trainer') ? 'active' : '' }}">
                                    {{ strtoupper($service->name) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

               <li class="dropdown">
                    <a href="#"
                    class="{{ request()->routeIs('frontend.instructor') ? 'active' : '' }}">
                        <span>Instructor Class</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>

                    <ul>
                        @foreach ($services->where('is_personal_training', 0) as $service)
                            <li>
                                <a href="{{ route('frontend.instructor', ['service' => $service->slug]) }}"
                                class="{{ request('service') === $service->slug && request()->routeIs('frontend.instructor') ? 'active' : '' }}">
                                    {{ strtoupper($service->name) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="#about">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>