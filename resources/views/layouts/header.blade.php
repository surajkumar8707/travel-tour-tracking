<!-- Top Bar -->
<div class="top-bar d-flex justify-content-center align-items-center text-white py-2">
    <div class="d-flex align-items-center">
        {{-- <i class="fas fa-envelope"></i> &nbsp;
        {{ explodeEmail($settings->email, '&nbsp;|&nbsp;', 'text-light') }} --}}
        {{-- <a class="text-light" href="tel:{{ $settings->contact }}"><i class="fas fa-phone-alt mr-2"></i> Email: +91-{{ $settings->contact }}</a> --}}
        {{-- <span class="mx-3">|</span> --}}
        <a class="text-light" href="tel:{{ $settings->contact }}"><i class="fas fa-phone-alt mr-2"></i> CALL:
            +91-{{ $settings->contact }}</a>
        <span class="mx-3">|</span>
        @if ($social->facebook_show)
            <a class="text-white mr-3" href="{{ $social->facebook }}" target="_blank" aria-label="Facebook"><i
                    class="fab fa-facebook-f"></i></a>
        @endif
        @if ($social->instagram_show)
            <a class="text-white mr-3" href="{{ $social->instagram }}" target="_blank" aria-label="Instagram"><i
                    class="fa-instagram fab"></i></a>
        @endif

        @if ($social->linkedin_show)
            <a class="text-white mr-3" href="{{ $social->linkedin }}" target="_blank" aria-label="Linkedin">
                <i class="fab fa-linkedin"></i>
            </a>
        @endif

        @if ($social->youTube_show)
            <a class="text-white mr-3" href="{{ $social->youTube }}" target="_blank" aria-label="Youtube"><i
                    class="fab fa-youtube"></i></a>
        @endif
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            @if (isset($settings->header_image) and !empty($settings->header_image))
                <img loading="{{ $settings->app_name }}" src="{{ public_asset($settings->header_image) }}"
                    alt="{{ $settings->app_name }}" alt="logo" height="40" class="mr-2">
            @else
                {{ $settings->app_name }}
            @endif
            {{-- <div>
                <span style="color: orange; font-weight: bold;">{{ $settings->app_name }}</span>
            </div> --}}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navMenu">
            <ul class="navbar-nav text-center">
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.home')"
                        href="{{ route('front.home') }}">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.about')" href="{{ route('front.about') }}">About
                        Us</a></li>
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.gallery')"
                        href="{{ route('front.gallery') }}">Gallery</a></li>
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
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.contact')"
                        href="{{ route('front.contact') }}">Contact us</a></li>
            </ul>
        </div>

        <!-- Call Now button -->
        <div class="d-none d-lg-block">
            <a class="btn call-now-btn ml-3" href="#">Call Now</a>
        </div>
    </div>
</nav>
