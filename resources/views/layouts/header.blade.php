<!-- Top Bar -->
<div class="top-bar d-flex justify-content-center align-items-center text-white py-2">
    <div class="d-flex align-items-center">
        <i class="fas fa-phone-alt mr-2"></i> CALL: +91-9761999826
        <span class="mx-3">|</span>
        <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://sraconstruction.in/images/logo.png" alt="logo" height="40" class="mr-2">
            <div>
                <span style="color: orange; font-weight: bold;">SHIVA</span>
                <span style="font-weight: bold;">ADVENTURES</span>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navMenu">
            <ul class="navbar-nav text-center">
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.home')" href="{{ route('front.home') }}">Home</a></li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Treks</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Trek 1</a>
                        <a class="dropdown-item" href="#">Trek 2</a>
                    </div>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Trips</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Trip 1</a>
                        <a class="dropdown-item" href="#">Trip 2</a>
                    </div>
                </li>
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.about')" href="{{ route('front.about') }}">About us</a></li>
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.contact')" href="{{ route('front.contact') }}">Contact us</a></li>
            </ul>
        </div>

        <!-- Call Now button -->
        <div class="d-none d-lg-block">
            <a class="btn call-now-btn ml-3" href="#">Call Now</a>
        </div>
    </div>
</nav>
