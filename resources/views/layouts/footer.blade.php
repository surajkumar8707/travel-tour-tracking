<footer class="bg-light text-dark pt-5 pb-3">
    <div class="container">
        <div class="row">
            <!-- About Us -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold theme-text">ABOUT US</h5>
                <p class="text-muted small">
                    Welcome to {{ $settings->app_name }} – A Leading Trekking and Travel Organisation in India. We
                    specialize
                    in providing high-quality trekking and travel experiences that are suitable for all skill
                    levels. Our team have been exploring the Himalayas for over 15+ years. Our mission is to provide
                    our customers with unforgettable experiences and life-changing adventures.
                </p>
            </div>

            <!-- Popular Treks -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold theme-text">POPULOR TREKS</h5>
                <ul class="list-unstyled text-muted small">
                    <li>Kedarkantha</li>
                    <li>Chopta Tungnath</li>
                    <li>Dayara Bugyal</li>
                    <li>Har Ki Dun Trek</li>
                </ul>
            </div>

            <!-- Popular Trips -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold theme-text">POPULOR TRIPS</h5>
                <ul class="list-unstyled text-muted small">
                    <li>Kedarnath Yatra</li>
                    <li>Spiti Roadtrip</li>
                    <li>Uttarakhand Roadtrip</li>
                    <li>Himachal Roadtrip</li>
                </ul>
            </div>

            <!-- Popular pages -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold theme-text">POPULOR PAGES</h5>
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
        <p class="mt-3 theme-text small">
            MADE WITH <span class="text-danger">❤️</span> BY Gaurav Tiwari
        </p>
    </div>
    </div>
</footer>
