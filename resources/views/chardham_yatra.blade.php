@extends('layouts.app')
@section('title', getSettings()->app_name . ' :: Chardham Yatra')
@section('content')

<!-- Hero Section -->
<section class="pt-5 pb-3 bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="fw-bold text-primary">Chardham Yatra Packages</h1>
                <p>Experience a spiritual journey in the Himalayas</p>
                <div class="row mt-4 g-2">
                    <div class="col-3"><img src="/images/chardham1.jpg" class="img-fluid rounded"></div>
                    <div class="col-3"><img src="/images/chardham2.jpg" class="img-fluid rounded"></div>
                    <div class="col-3"><img src="/images/chardham3.jpg" class="img-fluid rounded"></div>
                    <div class="col-3"><img src="/images/chardham4.jpg" class="img-fluid rounded"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Package Highlight -->
<section class="bg-white py-4 border-top border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Package Highlights</h4>
                <ul>
                    <li><strong>Region:</strong> Uttarakhand</li>
                    <li><strong>Duration:</strong> 10 Days / 9 Nights</li>
                    <li><strong>Grade:</strong> Moderate</li>
                </ul>
                <p>Discover the divine temples of Yamunotri, Gangotri, Kedarnath, and Badrinath with our expertly guided package. Immerse yourself in the beauty of the Himalayas and spiritual bliss.</p>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-primary w-100 mb-2">Show Itinerary</a>
                <a href="#" class="btn btn-warning w-100">Call Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Group Discount Section -->
<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h3>Got Bigger Group?</h3>
        <p>Get upto 10% Group Discount</p>
        <a href="#" class="btn btn-warning">Request Discount</a>
    </div>
</section>

<!-- Overview -->
<section class="py-5">
    <div class="container">
        <h3 class="text-primary mb-4">Yatra Overview</h3>
        <div class="row g-3">
            <div class="col-md-4"><img src="/images/yatra1.jpg" class="img-fluid rounded"></div>
            <div class="col-md-4"><img src="/images/yatra2.jpg" class="img-fluid rounded"></div>
            <div class="col-md-4"><img src="/images/yatra3.jpg" class="img-fluid rounded"></div>
        </div>
        <p class="mt-4">This sacred pilgrimage to the four holy shrines of Yamunotri, Gangotri, Kedarnath, and Badrinath offers more than just spiritual enrichment. It takes you through the serene valleys and majestic mountains of Uttarakhand. Our expertly curated itinerary ensures a comfortable journey and deep spiritual experience.</p>
        <a href="#" class="btn btn-outline-primary">View Full Itinerary</a>
    </div>
</section>

<!-- Itinerary -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="mb-4 text-primary">Yatra Itinerary</h3>
        <ul>
            <li>Day 1: Haridwar arrival - transfer to Barkot</li>
            <li>Day 2: Yamunotri Darshan</li>
            <li>Day 3: Transfer to Uttarkashi</li>
            <li>Day 4: Gangotri Visit</li>
            <li>Day 5: Transfer to Guptkashi</li>
            <li>Day 6: Kedarnath Darshan</li>
            <li>Day 7: Return to Guptkashi</li>
            <li>Day 8: Transfer to Badrinath</li>
            <li>Day 9: Badrinath Visit & transfer to Rudraprayag</li>
            <li>Day 10: Return to Haridwar</li>
        </ul>
    </div>
</section>

<!-- Dates and Pricing -->
<section class="py-5">
    <div class="container">
        <h3 class="mb-4 text-primary">Upcoming Dates</h3>
        <ul>
            <li>1st - 10th July</li>
            <li>10th - 19th August</li>
            <li>20th - 29th September</li>
        </ul>
        <a href="#" class="btn btn-primary mt-3">Check Availability</a>

        <h3 class="mt-5 text-primary">Package Options</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="border p-3">
                    <h5>Standard Package</h5>
                    <p>INR 18,999/- per person</p>
                    <ul>
                        <li>Accommodation & Meals</li>
                        <li>Local Transfers</li>
                    </ul>
                    <a href="#" class="btn btn-warning">Book Now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border p-3">
                    <h5>Deluxe Package</h5>
                    <p>INR 24,999/- per person</p>
                    <ul>
                        <li>All inclusions of Standard</li>
                        <li>3-Star Hotels + Private Transport</li>
                    </ul>
                    <a href="#" class="btn btn-warning">Book Deluxe</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews -->
<section class="py-5 bg-white">
    <div class="container">
        <h3 class="mb-4 text-primary">What Travellers Say</h3>
        <blockquote class="border p-3 mb-2">“A truly divine experience! Everything was perfectly arranged and comfortable.” - Meena</blockquote>
        <blockquote class="border p-3">“The team was very professional and supportive throughout the journey.” - Arjun</blockquote>
        <div class="mt-3">
            <img src="/images/google-rating.png" width="150">
            <a href="#" class="btn btn-outline-primary ms-3">Check More Reviews</a>
        </div>
    </div>
</section>

<!-- Inclusion/Exclusion -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-primary mb-3">Inclusions / Exclusions</h3>
        <div class="row">
            <div class="col-md-6">
                <h5>Includes:</h5>
                <ul>
                    <li>All local transfers and accommodations</li>
                    <li>Daily vegetarian meals</li>
                    <li>Experienced local guides</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Excludes:</h5>
                <ul>
                    <li>Airfare or train tickets</li>
                    <li>Personal expenses</li>
                    <li>Emergency evacuations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5 text-white text-center" style="background: linear-gradient(to right, #0083B0, #00B4DB);">
    <div class="container">
        <h2>Still in Confusion?</h2>
        <p>Talk to our Travel Experts</p>
        <a href="#" class="btn btn-warning">Book Now</a>
        <a href="tel:+919761999826" class="btn btn-outline-light">Call Now</a>
    </div>
</section>

@endsection
