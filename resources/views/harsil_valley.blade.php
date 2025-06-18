@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Harsil Valley')
@section('content')

<section class="py-5">
    <div class="container">

        {{-- Header Section --}}
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase">Harsil Valley</h2>
            <p class="text-muted">Explore the Hidden Gem of Uttarakhand</p>
        </div>

        {{-- Info Box --}}
        <div class="bg-light p-4 rounded shadow-sm mb-5">
            <div class="row g-3 text-center">
                <div class="col-md-3">
                    <strong>Region:</strong><br> Uttarakhand
                </div>
                <div class="col-md-3">
                    <strong>Max Altitude:</strong><br> 2620m
                </div>
                <div class="col-md-3">
                    <strong>Trip Duration:</strong><br> 3 Days / 2 Nights
                </div>
                <div class="col-md-3">
                    <strong>Best Time:</strong><br> April – November
                </div>
            </div>
        </div>

        {{-- Overview --}}
        <div class="mb-5">
            <h4 class="mb-3">Overview</h4>
            <p>
                Nestled on the banks of the Bhagirathi River, Harsil Valley is a serene Himalayan hamlet known for its apple orchards, dense deodar forests, and unspoiled nature. Often overshadowed by popular destinations, Harsil offers a peaceful retreat for nature lovers and spiritual seekers.
            </p>
            <p>
                With scenic walks, friendly locals, and photogenic landscapes, it's an ideal location for families, couples, and solo travelers looking for tranquility away from commercial tourist spots.
            </p>
        </div>

        {{-- Itinerary --}}
        <div class="mb-5">
            <h4 class="mb-3">Sample Itinerary</h4>
            <ul>
                <li><strong>Day 1:</strong> Drive from Dehradun to Harsil (approx. 7–8 hrs), check-in, evening at leisure.</li>
                <li><strong>Day 2:</strong> Sightseeing at Gangnani hot springs, Dharali village, and walk along the Bhagirathi River.</li>
                <li><strong>Day 3:</strong> Morning village walk and return journey to Dehradun.</li>
            </ul>
        </div>

        {{-- Package Options --}}
        <div class="mb-5">
            <h4 class="mb-3">Package Options</h4>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="border p-3 rounded">
                        <h5>Harsil Valley (Ex Dehradun)</h5>
                        <p class="mb-1">INR 6,499/- per person</p>
                        <ul>
                            <li>Transportation</li>
                            <li>Accommodation & Food</li>
                            <li>Local Guide</li>
                        </ul>
                        <a href="#" class="btn btn-warning btn-sm mt-2">Book Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded">
                        <h5>Harsil Valley Premium</h5>
                        <p class="mb-1">INR 9,999/- per person</p>
                        <ul>
                            <li>Luxury Stay</li>
                            <li>All Meals + Bonfire</li>
                            <li>Private Sightseeing</li>
                        </ul>
                        <a href="#" class="btn btn-warning btn-sm mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Inclusion / Exclusion --}}
        <div class="mb-5">
            <h4 class="mb-3">Inclusion & Exclusion</h4>
            <div class="row">
                <div class="col-md-6">
                    <h6>Inclusions</h6>
                    <ul>
                        <li>Accommodation on sharing basis</li>
                        <li>Meals – Breakfast & Dinner</li>
                        <li>Transportation from Dehradun (round trip)</li>
                        <li>Local Sightseeing</li>
                        <li>Experienced Tour Manager</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>Exclusions</h6>
                    <ul>
                        <li>Personal expenses</li>
                        <li>Anything not mentioned in inclusions</li>
                        <li>GST @ 5%</li>
                        <li>Travel Insurance</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- FAQs --}}
        <div class="mb-5">
            <h4 class="mb-3">Frequently Asked Questions</h4>
            <ul>
                <li><strong>What’s the best time to visit Harsil Valley?</strong><br> April to November is ideal for clear skies and comfortable temperatures.</li>
                <li><strong>Is Harsil safe for solo travelers?</strong><br> Yes, Harsil is peaceful and safe, with welcoming locals.</li>
                <li><strong>Are ATMs available?</strong><br> Very limited. Carry sufficient cash.</li>
                <li><strong>How far is Gangotri from Harsil?</strong><br> Around 25 km. Can be covered in a day trip.</li>
            </ul>
        </div>

        {{-- Call to Action --}}
        <div class="text-center bg-light p-4 rounded shadow-sm mt-5">
            <h5 class="fw-bold mb-2">Still Have Questions?</h5>
            <p>Contact our travel experts to customize your Harsil getaway!</p>
            <a href="#" class="btn btn-primary me-2">Call Now</a>
            <a href="#" class="btn btn-outline-primary">WhatsApp</a>
        </div>

    </div>
</section>

@endsection
