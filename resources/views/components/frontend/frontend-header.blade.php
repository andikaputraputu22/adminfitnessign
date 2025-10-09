<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">FITNESSIGN</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul class="fitnessign-text-green">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Health</a></li>
                <li class="dropdown"><a href="#"><span>Personal Training</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('frontend.trainer', ['id' => 'advance']) }}">ADVANCE</a></li>
                        <li><a href="{{ route('frontend.trainer', ['id' => 'prime']) }}">PRIME</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Instructor Class</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('frontend.instructor', ['id' => 'poundfit']) }}">POUNDFIT</a></li>
                        <li><a href="{{ route('frontend.instructor', ['id' => 'zumba']) }}">ZUMBA</a></li>
                        <li><a href="{{ route('frontend.instructor', ['id' => 'aerobic']) }}">AEROBIC</a></li>
                        <li><a href="{{ route('frontend.instructor', ['id' => 'body combat']) }}">BODY COMBAT</a></li>
                    </ul>
                </li>
                <li><a href="#about">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
