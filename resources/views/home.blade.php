@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $key => $slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ public_asset($slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}"
                        style="height: 90vh; object-fit: cover;">

                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                        <h2 class="text-uppercase font-weight-bold">{{ strtoupper($slider->title) }}</h2>
                        <h1 class="display-4 font-weight-bold">Your Adventure Starts Here</h1>
                        <p class="lead">TREKKING | TOURS | ADVENTURE | WILDLIFE</p>
                        <a href="#" class="btn btn-lg mt-3">JOIN NOW</a>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Summer Offer Section -->
    <section class="py-5 text-center" style="background-color: #f8fcfd;">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <div class="p-4 rounded" style="background: linear-gradient(to right, #0088a9, #00b7c5); color: white;">
                        <h2 class="font-weight-bold text-warning mb-1">SUMMER OFFER</h2>
                        <p class="mb-3">Get upto 40% off on winter treks</p>
                        <a href="#" class="btn btn-warning font-weight-bold">BOOK NOW</a>
                    </div>
                </div>
            </div>

            <!-- About Section -->
            <div class="row align-items-center py-4 px-2" style="background-color: #f0fdff; border-radius: 8px;">
                <div class="col-md-3 mb-3 mb-md-0">
                    <img src="{{ public_asset('assets/front/images/abtimg.jpg') }}" alt="About {{ $settings->app_name }}"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-9 text-left">
                    <p>
                        Welcome to <strong style="color: #ff7900;">{{ $settings->app_name }}</strong> – Trekking Company! We
                        are
                        a leading trekking company based in Uttarakhand and we specialize in providing high-quality
                        trekking experiences that are suitable for all skill levels. We are a passionate group of
                        experienced trek leaders who have been exploring the Himalayas for over 15+ years. Our mission
                        is to provide our customers with unforgettable trekking experiences and life-changing
                        adventures.
                    </p>
                </div>
            </div>

            <!-- Categories Section -->
            <div class="row justify-content-center mt-5">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow" style="overflow: hidden; border-radius: 20px;">
                        <img class="w-100" height="280px" src="{{ public_asset('assets/front/images/catimg1.jpg') }}" class="card-img" alt="Trekking">
                        <div class="card-img-overlay d-flex align-items-end p-3"
                            style="background: rgba(0,0,0,0.4); border-radius: 20px;">
                            <h4 class="text-white font-weight-bold mb-0">TREKKING</h4>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow" style="overflow: hidden; border-radius: 20px;">
                        <img class="w-100" height="280px" src="{{ public_asset('assets/front/images/roadtrip.jpg') }}" class="card-img" alt="Roadtrip">
                        <div width="100%" class="card-img-overlay d-flex align-items-end p-3"
                            style="background: rgba(0,0,0,0.4); border-radius: 20px;">
                            <h4 class="text-white font-weight-bold mb-0">ROADTRIP</h4>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow" style="overflow: hidden; border-radius: 20px;">
                        <img class="w-100" height="280px" src="{{ public_asset('assets/front/images/pilgrimage.jpg') }}" class="card-img" alt="Pilgrimage">
                        <div class="card-img-overlay d-flex align-items-end p-3"
                            style="background: rgba(0,0,0,0.4); border-radius: 20px;">
                            <h4 class="text-white font-weight-bold mb-0">PILGRIMAGE</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Treks Section -->
    <section class="py-5" style="background-color: #f0fcfc;">
        <div class="container">
            <!-- Heading Row -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <small class="text-muted font-weight-bold">May–July edition</small>
                    <h3 class="font-weight-bold text-info">UPCOMING TREKS</h3>
                </div>
                <div>
                    <a href="#" class="btn btn-warning shadow" style="padding: 10px 20px; border-radius: 8px;">BOOK
                        NOW</a>
                </div>
            </div>

            <!-- Filter Buttons -->
            <div class="btn-group d-flex flex-wrap mb-5" role="group">
                <button type="button" class="btn btn-info font-weight-bold text-warning mr-2 mb-2">All treks</button>
                <button type="button" class="btn btn-outline-info mr-2 mb-2">Kedarkantha</button>
                <button type="button" class="btn btn-outline-info mr-2 mb-2">Chopta Tungnath</button>
                <button type="button" class="btn btn-outline-info mr-2 mb-2">Dayara Bugyal</button>
                <button type="button" class="btn btn-outline-info mr-2 mb-2">Har Ki Dun</button>
                <button type="button" class="btn btn-outline-info mb-2">Valley of Flowers</button>
            </div>

            <!-- Trek Cards -->
            <div class="row">
                <!-- Card Template -->
                <div class="col-md-4 col-lg-3 mb-4" style="min-width: 250px;">
                    <div class="card shadow-sm rounded" style="border: none;">
                        <img width="100%" height="180px" src="{{ public_asset('assets/front/images/valley-flower.jpg') }}" class="card-img-top"
                            alt="Valley of Flowers">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title">Valley of flowers</h5>
                            <p><span class="badge badge-info">Grade: E</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Popular Monsoon Trek</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 5N/6D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 12,000 ft</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-block mt-3">KNOW MORE <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Repeat similar cards below -->
                <!-- Kedarkantha Trek -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card shadow-sm rounded">
                        <img width="100%" height="180px" src="{{ public_asset('assets/front/images/kedarkantha.jpg') }}" class="card-img-top"
                            alt="Kedarkantha">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title">Kedarkantha Trek</h5>
                            <p><span class="badge badge-info">Grade: E</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Popular Winter Trek</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 4N/5D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 12,500 ft</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-block mt-3">KNOW MORE <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Tungnath Trek -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card shadow-sm rounded">
                        <img width="100%" height="180px" src="{{ public_asset('assets/front/images/tungnath-trek.webp') }}" class="card-img-top"
                            alt="Tungnath Trek">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title">Tungnath Trek</h5>
                            <p><span class="badge badge-info">Grade: E</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Popular Winter Trek</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 4N/5D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 13,500 ft</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-block mt-3">KNOW MORE <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Dayara Bugyal -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card shadow-sm rounded">
                        <img width="100%" height="180px" src="{{ public_asset('assets/front/images/dayara-bugyal.webp') }}" class="card-img-top" alt="Dayara Bugyal">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title">Dayara Bugyal</h5>
                            <p><span class="badge badge-info">Grade: E</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Popular Winter Trek</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 4N/5D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 11,181 ft</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-block mt-3">KNOW MORE <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Har Ki Dun -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card shadow-sm rounded">
                        <img src="{{ public_asset('assets/front/images/har-ki-dun.jpg') }}" class="card-img-top" alt="Har Ki Dun">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title">Har Ki Dun Trek</h5>
                            <p><span class="badge badge-info">Grade: E</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Popular Winter Trek</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 6N/7D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 12,000 ft</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-block mt-3">KNOW MORE <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #f0fcfc;">
        <div class="container">
            <!-- Header row -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <small class="text-muted font-weight-bold">Pilgrimages and Roadtrips</small>
                    <h3 class="font-weight-bold text-info">POPULOR PACKAGES</h3>
                </div>
                <a href="#" class="btn text-white font-weight-bold"
                    style="background: linear-gradient(135deg, #f97428, #ff9659); border-radius: 8px; box-shadow: 0 0 10px rgba(255, 130, 66, 0.4); padding: 10px 20px;">BOOK
                    NOW</a>
            </div>

            <!-- Cards Row -->
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-lg">
                        <img src="{{ public_asset('assets/front/images/kedarnath-yatra.jpg') }}" class="card-img-top rounded-top"
                            alt="Kedarnath Yatra">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title font-weight-bold">Kedarnath Yatra</h5>
                            <p><span class="badge badge-warning text-white px-2 py-1">Grade: Easy</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Popular Pilgrimage</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 4N/5D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 11,755 ft</li>
                            </ul>
                            <a href="#" class="btn btn-info btn-block text-white font-weight-bold mt-3">KNOW
                                MORE <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-lg">
                        <img src="{{ public_asset('assets/front/images/chardham-yatra.jpeg') }}" class="card-img-top rounded-top"
                            alt="Chardham Yatra">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title font-weight-bold">Chardham Yatra</h5>
                            <p><span class="badge badge-warning text-white px-2 py-1">Grade: Easy</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Popular Pilgrimage</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 8N/9D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 11,755 ft</li>
                            </ul>
                            <a href="#" class="btn btn-info btn-block text-white font-weight-bold mt-3">KNOW
                                MORE <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-lg">
                        <img src="{{ public_asset('assets/front/images/spiti-roadtrip.jpg') }}" class="card-img-top rounded-top"
                            alt="Spiti Roadtrip">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="text-warning">★★★★★</span>
                            </div>
                            <h5 class="card-title font-weight-bold">Spiti Roadtrip</h5>
                            <p><span class="badge badge-warning text-white px-2 py-1">Grade: Easy</span></p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fas fa-check-circle text-info mr-2"></i>Most Populor Winter Trek</li>
                                <li><i class="fas fa-map-marker-alt text-info mr-2"></i>Region: Uttarakhand</li>
                                <li><i class="fas fa-clock text-info mr-2"></i>Duration: 4N/5D</li>
                                <li><i class="fas fa-mountain text-info mr-2"></i>Altitude: 12,500 ft</li>
                            </ul>
                            <a href="#" class="btn btn-info btn-block text-white font-weight-bold mt-3">KNOW
                                MORE <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #f0fcfc;">
        <div class="container text-center">
            <h2 class="font-weight-bold text-info mb-3">WHY CHOOSE US?</h2>
            <p class="mb-5" style="max-width: 800px; margin: 0 auto;">
                <strong class="text-info">{{ $settings->app_name }}</strong> is your go-to adventure tourism company for an
                unforgettable experience.
                Our team of experts ensures your safety as we prioritize responsible and sustainable tourism practices.
                <span class="theme-text">From trekking to camping, road trips to mountain expeditions</span>, we
                provide a wide range of adventure services.
                Our commitment to excellent customer service means we’re always available to answer any questions or
                concerns.
                Choose {{ $settings->app_name }} for a memorable and enjoyable adventure in the stunning Himalayan region.
            </p>

            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/4727/4727429.png" class="img-fluid mb-3"
                            alt="Team">
                        <h6 class="font-weight-bold">Experienced and knowledgeable team</h6>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/2721/2721272.png" class="img-fluid mb-3"
                            alt="Safety">
                        <h6 class="font-weight-bold">Top priority on quality &amp; safety</h6>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/2972/2972350.png" class="img-fluid mb-3"
                            alt="Customer Service">
                        <h6 class="font-weight-bold">Excellent customer service</h6>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png" class="img-fluid mb-3"
                            alt="Sustainable">
                        <h6 class="font-weight-bold">Sustainable and responsible tourism</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center">
        <div class="container">
            <h6 class="text-muted">What our happy travelers says about us</h6>
            <h2 class="font-weight-bold text-info mb-5">REVIEWS</h2>

            <!-- Swiper Carousel -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <!-- Review 1 -->
                    <div class="swiper-slide">
                        <div class="border rounded p-3">
                            <strong>Rahul Shrivastava</strong>
                            <hr />
                            <p>The Spiti road trip with {{ $settings->app_name }} was incredible! From the stunning scenery
                                to
                                the knowledgeable guides, everything was top-notch. I can't wait to book my next
                                adventure with them.</p>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="swiper-slide">
                        <div class="border rounded p-3">
                            <strong>Asim Khan</strong>
                            <hr />
                            <p>What an amazing experience! The Spiti road trip with {{ $settings->app_name }} was an
                                adventure of
                                a lifetime. The team was professional, friendly, and ensured our safety at all times.
                            </p>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="swiper-slide">
                        <div class="border rounded p-3">
                            <strong>Mahi Jain</strong>
                            <hr />
                            <p>The Kedarkantha winter trek with {{ $settings->app_name }} was incredible! The guides were
                                knowledgeable and supportive, and the views were breathtaking. I highly recommend this
                                experience.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="border rounded p-3">
                            <strong>Neha Mehra</strong>
                            <hr />
                            <p>One of the best trips I’ve ever had. Perfect planning and great team support. Loved every
                                bit of it!</p>
                        </div>
                    </div>

                </div>

                <!-- Swiper Pagination & Arrows -->
                <div class="swiper-pagination mt-3"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <!-- Rating Logos -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 col-6 mb-3">
                    <img src="{{ public_asset('assets/front/images/google-rating.png') }}" width="100%">
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <img src="{{ public_asset('assets/front/images/facebook-rating.png') }}" width="100%">
                </div>
            </div>

            <!-- Book Now Button -->
            {{-- <div class="mt-4">
                <a href="#booking" class="btn btn-warning shadow"
                    style="background: linear-gradient(135deg, #ff7f50, #ff5722); color: #fff; padding: 12px 24px; border-radius: 8px;">
                    BOOK NOW
                </a>
            </div> --}}
        </div>
    </section>

    {{-- <!-- Travel Blogs Section -->
    <section class="travel-blogs py-5 text-center">
        <div class="container">
            <p class="text-muted">Read our travel related blog section</p>
            <h2 class="fw-bold theme-text">TRAVEL BLOGS</h2>

            <div class="row mt-4">
                <!-- Blog 1 -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0 h-100 rounded-4">
                        <img src="{{ asset('images/kedarkantha.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Kedarkantha Trek">
                        <div class="card-body text-start">
                            <h5 class="card-title fw-semibold">
                                Kedarkantha Trek – A Journey to the Most Magnificent Winter Trekking Destination
                            </h5>
                            <a href="#" class="theme-text fw-medium small">Read More »</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0 h-100 rounded-4">
                        <img src="{{ asset('images/spiti.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Spiti Road Trip">
                        <div class="card-body text-start">
                            <h5 class="card-title fw-semibold">
                                Spiti Road Trip: The Drive of a Lifetime
                            </h5>
                            <a href="#" class="theme-text fw-medium small">Read More »</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-warning text-white fw-semibold px-4 py-2 rounded-pill mt-2">READ MORE</a>
        </div>
    </section> --}}

    <!-- Confusion Section -->
    <section class="bg-gradient-to-bottom text-white py-5"
        style="background: linear-gradient(to right, #007a8c, #00c6ff);">
        <div class="container text-center">
            <h2 class="fw-bold mb-2">Still in Confusion?</h2>
            <p class="mb-4">Talk to our Travel-Experts</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="btn btn-warning text-white fw-semibold px-4 py-2 rounded-pill">Book Now</a>
                <a href="tel:{{ $settings->contact }}" class="btn btn-outline-light fw-semibold px-4 py-2 rounded-pill border-2">Call
                    Now</a>
            </div>
        </div>
    </section>
@endsection
