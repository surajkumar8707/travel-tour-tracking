<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') :: {{ $settings->app_name }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $settings->app_name }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Bootstrap 4 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- style.css -->
    <link rel="stylesheet" href="{{ public_asset('assets/front/css/style.css') }}">

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- custom css -->
    @stack('styles')
</head>

<body>

    <!-- Header start -->
    @include('layouts.header')
    <!--/ Header end -->

    @yield('content')



    <footer class="bg-light text-dark pt-5 pb-3">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold text-primary">ABOUT US</h5>
                    <p class="text-muted small">
                        Welcome to Shiva Adventures – A Leading Trekking and Travel Organisation in India. We specialize
                        in providing high-quality trekking and travel experiences that are suitable for all skill
                        levels. Our team have been exploring the Himalayas for over 15+ years. Our mission is to provide
                        our customers with unforgettable experiences and life-changing adventures.
                    </p>
                </div>

                <!-- Popular Treks -->
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold text-primary">POPULOR TREKS</h5>
                    <ul class="list-unstyled text-muted small">
                        <li>Kedarkantha</li>
                        <li>Chopta Tungnath</li>
                        <li>Dayara Bugyal</li>
                        <li>Har Ki Dun Trek</li>
                    </ul>
                </div>

                <!-- Popular Trips -->
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold text-primary">POPULOR TRIPS</h5>
                    <ul class="list-unstyled text-muted small">
                        <li>Kedarnath Yatra</li>
                        <li>Spiti Roadtrip</li>
                        <li>Uttarakhand Roadtrip</li>
                        <li>Himachal Roadtrip</li>
                    </ul>
                </div>

                <!-- Popular pages -->
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold text-primary">POPULOR PAGES</h5>
                    <ul class="list-unstyled text-muted small">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li><a href="{{ route('front.about') }}">About</a></li>
                        <li><a href="{{ route('front.privacy.policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('front.terms.condition') }}">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <!-- Social Icons -->
            <a href="#" class="btn btn-outline-secondary btn-sm mx-1 rounded-circle">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="btn btn-outline-secondary btn-sm mx-1 rounded-circle">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="btn btn-outline-danger btn-sm mx-1 rounded-circle">
                <i class="fab fa-youtube"></i>
            </a>

            <!-- Footer Bottom Text -->
            <p class="mt-3 text-primary small">
                MADE WITH <span class="text-danger">❤️</span> BY SMART AGENCY
            </p>
        </div>
        </div>
    </footer>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ public_asset('assets/front/js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
