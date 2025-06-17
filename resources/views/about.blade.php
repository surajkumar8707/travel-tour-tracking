@extends('layouts.app')
@section('title', getSettings()->app_name . ':: About Page')
@section('content')

    <!-- Page Banner -->
    <section class="py-5 theme-bg text-light text-center heading-section">
        <div class="container">
            <h1 class="display-6 fw-bold">About {{ $settings->app_name }}</h1>
            <p class="lead">Your trusted partner in Himalayan trekking & travel experiences</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    {{-- <img src="{{ asset('images/about-himalayas.jpg') }}" alt="{{ $settings->app_name }}" --}}
                    <img src="https://static.toiimg.com/thumb/66461463/adventure-tourism.jpg?width=1000&height=800" alt="{{ $settings->app_name }}"
                        class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <h2 class="theme-text fw-bold">Welcome to {{ $settings->app_name }}</h2>
                    <p class="text-muted">
                        {{ $settings->app_name }} is a leading trekking and travel organization in India, dedicated to crafting
                        unforgettable journeys into the heart of the Himalayas. With over <strong>15+ years of
                            experience</strong>, our team specializes in high-quality trekking experiences suited for all
                        skill levels.
                    </p>
                    <p class="text-muted">
                        Whether you're seeking serene trails or high-altitude adventures, our expert guides ensure your
                        safety, comfort, and immersion into the raw beauty of the mountains. Join us to create stories worth
                        sharing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center theme-text fw-bold mb-4">Why Choose {{ $settings->app_name }}?</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <i class="fas fa-hiking fa-2x theme-text mb-2"></i>
                    <h5 class="fw-bold">Expert Guides</h5>
                    <p class="small text-muted">Certified, friendly and knowledgeable local guides who know every corner of
                        the Himalayas.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <i class="fas fa-star fa-2x theme-text mb-2"></i>
                    <h5 class="fw-bold">5-Star Rated</h5>
                    <p class="small text-muted">Loved by travelers on Google and Facebook. 5.0 star ratings from happy
                        adventurers.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <i class="fas fa-mountain fa-2x theme-text mb-2"></i>
                    <h5 class="fw-bold">Diverse Destinations</h5>
                    <p class="small text-muted">From Kedarkantha to Spiti Valley, choose from curated treks and road trips
                        across North India.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <i class="fas fa-shield-alt fa-2x theme-text mb-2"></i>
                    <h5 class="fw-bold">Safety First</h5>
                    <p class="small text-muted">All our trips follow strict safety protocols and are supported by expert
                        backup teams.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team or Testimonial Slider (Optional) -->
    {{-- You can reuse the Swiper-based slider section here if needed --}}

    <!-- Call to Action -->
    <section class="py-5 text-white text-center" style="background: linear-gradient(135deg, #0083B0, #00B4DB);">
        <div class="container">
            <h2 class="fw-bold">Still in Confusion?</h2>
            <p class="mb-4">Talk to our Travel-Experts</p>
            <a href="{{ route('front.contact') }}" class="btn btn-warning me-2">Book Now</a>
            <a href="tel:+919999999999" class="btn btn-outline-light">Call Now</a>
        </div>
    </section>

@endsection
