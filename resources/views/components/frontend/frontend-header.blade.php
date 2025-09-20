<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Fitnessign.</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/blog">Health</a></li>
                <li class="dropdown"><a href="#"><span>Personal Training</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">ADVANCE</a></li>
                        <li><a href="#">PRIME</a></li>

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
