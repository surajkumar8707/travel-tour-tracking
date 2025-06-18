@extends('layouts.app')
@section('title', getSettings()->app_name . ' :: Nag Tibba')
@section('content')

<section class="py-5">
    <div class="container">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-md-12">
                <img src="{{ asset('images/nagtibba-banner.jpg') }}" class="img-fluid w-100" alt="Nag Tibba Trek">
            </div>
        </div>

        <!-- Trek Info Summary -->
        <div class="card mb-4 p-4 shadow-sm">
            <h2 class="text-center">Nag Tibba Trek</h2>
            <p class="text-center text-muted">"The Serpent's Peak – Perfect Weekend Escape in the Himalayas"</p>

            <div class="row text-center mt-4">
                <div class="col-md-3">
                    <strong>Region:</strong><br>Uttarakhand
                </div>
                <div class="col-md-3">
                    <strong>Duration:</strong><br>2 Days / 1 Night
                </div>
                <div class="col-md-3">
                    <strong>Max Altitude:</strong><br>3,022m
                </div>
                <div class="col-md-3">
                    <strong>Difficulty:</strong><br>Easy to Moderate
                </div>
            </div>
        </div>

        <!-- Overview Section -->
        <div class="card mb-4 p-4 shadow-sm">
            <h4>Trek Overview</h4>
            <p>
                The Nag Tibba Trek, also known as the "Serpent’s Peak", is one of the most popular weekend treks from Delhi and Dehradun. Located in the Garhwal Himalayas near Mussoorie, this 2-day trek is a fantastic option for beginners and nature lovers alike.
            </p>
            <p>
                The trek offers stunning views of Bandarpunch, Kedarnath, and Gangotri peaks, and winds through dense forests of oak and rhododendron. At the summit, trekkers are rewarded with breathtaking 360-degree Himalayan views. It’s also perfect for those with limited time but a strong craving for the outdoors.
            </p>
        </div>

        <!-- Itinerary Section -->
        <div class="card mb-4 p-4 shadow-sm">
            <h4>Trek Itinerary</h4>
            <ul>
                <li><strong>Day 1:</strong> Drive from Dehradun to Pantwari (90 km, 3 hrs). Trek to Base Camp (4-5 km). Enjoy bonfire and overnight camping.</li>
                <li><strong>Day 2:</strong> Early morning summit to Nag Tibba Top (3 km). Descend back to Pantwari. Drive back to Dehradun by evening.</li>
            </ul>
        </div>

        <!-- Package Options -->
        <div class="card mb-4 p-4 shadow-sm">
            <h4>Package Options</h4>
            <div class="row text-center">
                <div class="col-md-6 mb-3">
                    <div class="border p-3 rounded">
                        <h5>From Pantwari</h5>
                        <p><strong>INR 1,299/-</strong></p>
                        <small>Includes camping & guide</small><br>
                        <a href="#" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="border p-3 rounded">
                        <h5>From Dehradun</h5>
                        <p><strong>INR 2,199/-</strong></p>
                        <small>Includes transport, food, guide & camping</small><br>
                        <a href="#" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inclusion / Exclusion -->
        <div class="card mb-4 p-4 shadow-sm">
            <h4>Inclusion & Exclusion</h4>
            <strong>Inclusion:</strong>
            <ul>
                <li>Transportation (for Dehradun package)</li>
                <li>All meals during the trek</li>
                <li>Camping accommodation (twin/triple sharing)</li>
                <li>Experienced trek leader & support staff</li>
            </ul>

            <strong>Exclusion:</strong>
            <ul>
                <li>Personal expenses</li>
                <li>Any kind of insurance</li>
                <li>Anything not mentioned under “Inclusions”</li>
            </ul>
        </div>

        <!-- FAQs -->
        <div class="card mb-4 p-4 shadow-sm">
            <h4>Frequently Asked Questions</h4>
            <ul>
                <li><strong>What is the best time for Nag Tibba Trek?</strong><br>October to April. Best for snow views: Jan–Feb.</li>
                <li><strong>Is it good for beginners?</strong><br>Yes, it’s ideal for first-timers.</li>
                <li><strong>What should I carry?</strong><br>Warm clothes, trekking shoes, torch, water bottle, ID proof.</li>
            </ul>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <h5>Still have questions?</h5>
            <p>Call our experts now or book your weekend adventure!</p>
            <a href="#" class="btn btn-warning mx-2">Book Now</a>
            <a href="tel:{{ getSettings()->phone }}" class="btn btn-outline-primary mx-2">Call Us</a>
        </div>
    </div>
</section>

@endsection
