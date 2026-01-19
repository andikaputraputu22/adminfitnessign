<footer class="footer">
    <div class="container text-center">
        <img style="max-height: 45px;" src="{{ asset('frontend/assets/img/FITNESSIGN_WHITE.png') }}" alt="FITNESSIGN Logo" class="logo-img">
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/#about') }}">About</a>
            <a href="{{ url('/blog') }}">Blog</a>
            <a href="https://wa.me/6282118317062?text={{ urlencode('Halo, saya ingin menanyakan seputar Coach & Instructor Fitnessign.') }}" target="_blank">Contact</a>
        </nav>
        <p>© <span id="year"></span> FITNESSIGN. All rights reserved.</p>
    </div>
</footer>
