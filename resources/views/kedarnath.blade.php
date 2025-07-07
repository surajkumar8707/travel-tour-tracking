@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Kedarkantha Winter Trek')
@push('styles')
    <style>
        div img.kedarnath-img {
            width: 100%;
            height: 500px;
        }

        .elementor-section .elementor-container {
            display: flex;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .elementor-51 .elementor-element.elementor-element-e1243b7:not(.elementor-motion-effects-element-type-background),
        .elementor-51 .elementor-element.elementor-element-e1243b7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: linear-gradient(145deg, #00BDE7 0%, #007A95 100%);
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        @media (min-width: 768px) {

            .elementor-column.elementor-col-25,
            .elementor-column[data-col="25"] {
                width: 25%;
            }
        }

        .elementor-element,
        .elementor-lightbox {
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px;
        }

        .elementor-element {
            --widgets-spacing: 20px 20px;
            --widgets-spacing-row: 20px;
            --widgets-spacing-column: 20px;
        }

        .elementor-column {
            display: flex;
            min-height: 1px;
            position: relative;
        }

        .elementor-element {
            background: #00839f;
            --widgets-spacing: 20px 20px;
            --widgets-spacing-row: 20px;
            --widgets-spacing-column: 20px;
            color: white;
            border-radius: 10px;
            padding-top: 6px;
        }

        .elementor-element {
            --flex-direction: initial;
            --flex-wrap: initial;
            --justify-content: initial;
            --align-items: initial;
            --align-content: initial;
            --gap: initial;
            --flex-basis: initial;
            --flex-grow: initial;
            --flex-shrink: initial;
            --order: initial;
            --align-self: initial;
            align-self: var(--align-self);
            flex-basis: var(--flex-basis);
            flex-grow: var(--flex-grow);
            flex-shrink: var(--flex-shrink);
            order: var(--order);
        }

        .elementor *,
        .elementor :after,
        .elementor :before {
            box-sizing: border-box;
        }

        .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
            padding: 10px;
        }

        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: flex;
        }

        .elementor-widget-wrap {
            align-content: flex-start;
            flex-wrap: wrap;
            position: relative;
            width: 100%;
        }

        .elementor-51 .elementor-element.elementor-element-bd004b5 {
            --e-icon-list-icon-size: 37px;
            --icon-vertical-offset: 0px;
        }

        .elementor-widget-wrap>.elementor-element {
            width: 100%;
        }

        .elementor-element,
        .elementor-lightbox {
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px;
        }


        .elementor-widget {
            position: relative;
        }

        .elementor-element:where(.e-con-full, .elementor-widget) {
            align-content: var(--align-content);
            align-items: var(--align-items);
            flex-direction: var(--flex-direction);
            flex-wrap: var(--flex-wrap);
            gap: var(--row-gap) var(--column-gap);
            justify-content: var(--justify-content);
        }

        .group-banner {
            background: linear-gradient(to right, #00b4db, #0083b0);
            border-radius: 15px;
            padding: 30px;
            color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .group-banner img {
            border-radius: 10px;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .group-banner h2 {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .group-banner p {
            font-size: 1.25rem;
        }

        .highlight {
            color: orange;
            font-weight: bold;
        }

        .btn-book {
            background-color: orange;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
        }

        .btn-book:hover {
            background-color: darkorange;
        }

        .trusted-banner {
            background: linear-gradient(to right, #00b4db, #0083b0);
            border-radius: 15px;
            padding: 40px;
            color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .trusted-banner img {
            border-radius: 10px;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .trusted-banner h2 {
            font-weight: 400;
            font-size: 2.2rem;
        }

        .trusted-banner h2 .fw-bold {
            font-weight: 700;
        }

        .trusted-list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .trusted-list li {
            margin-bottom: 10px;
            font-size: 1.1rem;
            position: relative;
            padding-left: 30px;
        }

        .trusted-list li::before {
            content: '⭐';
            position: absolute;
            left: 0;
            top: 2px;
            color: yellow;
            font-size: 1.1rem;
        }

        .btn-trek {
            background-color: orange;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
        }

        .btn-trek:hover {
            background-color: darkorange;
        }

        .section-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }

        .btn-primary-custom {
            background-color: #00AEEF;
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 8px;
            color: white;
        }

        .btn-primary-custom:hover {
            background-color: #007caa;
        }

        .booking-sidebar {
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: sticky;
            top: 30px;
        }

        .booking-sidebar .btn {
            width: 100%;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .booking-sidebar ul {
            list-style: none;
            padding-left: 0;
            margin-top: 15px;
        }

        .booking-sidebar ul li {
            padding-left: 24px;
            position: relative;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .booking-sidebar ul li::before {
            content: '⭐';
            position: absolute;
            left: 0;
            color: orange;
        }

        .card-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .text-orange {
            color: orange;
        }

        .btn-orange {
            background-color: orange;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .btn-orange-outline {
            border: 2px solid orange;
            color: orange;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            background: transparent;
        }

        ul.custom-list li::before {
            content: "\2022";
            color: orange;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .checklist {
            list-style: none;
            padding-left: 0;
        }

        .checklist li::before {
            content: '\2713';
            color: #00aeef;
            font-weight: bold;
            display: inline-block;
            width: 1.5em;
        }

        .crosslist li::before {
            content: '\2717';
            color: red;
            font-weight: bold;
            display: inline-block;
            width: 1.5em;
        }
    </style>
@endpush
@section('content')
    <main class="pt-16">
        <div class="">
            <img alt="Snowy mountain landscape" class="kedarnath-img"
                src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/08/Kedarkantha-Trek.png?resize=1024%2C469&ssl=1" />
            <div class="absolute inset-0 bg-black opacity-30"></div>
        </div>
        <!-- Trek Info Section -->
        <div class="container position-relative z-1 mt-n5"
            style="transition: background 0.3s, border-radius 0.3s, opacity 0.3s;">
            <div class="bg-white p-4 p-md-5 rounded shadow mb-5">
                <h1 class="text-center fw-bold text-dark display-5" style="color: #015b70 !important">Kedarkantha Winter
                    Trek</h1>
                <p class="text-center text-muted mt-2">One of the best winter treks in India</p>

                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-e1243b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e1243b7" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2fa4930"
                            data-id="2fa4930" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-bd004b5 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="bd004b5" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                                                <span class="elementor-icon-list-text"><b>Region</b><br>Uttarahand</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cfc8a06"
                            data-id="cfc8a06" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-e1080e4 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="e1080e4" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-walking"></i> </span>
                                                <span class="elementor-icon-list-text"><b>Trek Distance</b><br>20km</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-387957a"
                            data-id="387957a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-8c6105f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="8c6105f" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chart-area"></i> </span>
                                                <span class="elementor-icon-list-text"><b>Max
                                                        Altitude</b><br>12,500ft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3140e04"
                            data-id="3140e04" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-e208d16 elementor-widget elementor-widget-progress"
                                    data-id="e208d16" data-element_type="widget" data-widget_type="progress.default">
                                    <div class="elementor-widget-container">
                                        <span class="elementor-title" id="elementor-progress-bar-e208d16">
                                            Difficulty Level </span>

                                        <div aria-labelledby="elementor-progress-bar-e208d16"
                                            class="elementor-progress-wrapper progress-success" role="progressbar"
                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="33"
                                            aria-valuetext="33% (Easy)">
                                            <div class="elementor-progress-bar" data-max="33" style="width: 33%;">
                                                <span class="elementor-progress-text">Easy</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <div class="row text-center mt-4 g-3">
                    <div class="col-6 col-md-3">
                        <div class="d-flex justify-content-center align-items-center mb-1">
                            <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                            <span class="ms-2 fw-semibold">Region</span>
                        </div>
                        <p class="text-secondary">Uttarakhand</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex justify-content-center align-items-center mb-1">
                            <span class="material-icons text-primary">trending_up</span>
                            <span class="ms-2 fw-semibold">Trek Distance</span>
                        </div>
                        <p class="text-secondary">18Km</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex justify-content-center align-items-center mb-1">
                            <span class="material-icons text-success">terrain</span>
                            <span class="ms-2 fw-semibold">Max Altitude</span>
                        </div>
                        <p class="text-secondary">12,500ft</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex justify-content-center align-items-center mb-1">
                            <span class="material-icons text-warning">speed</span>
                            <span class="ms-2 fw-semibold">Difficulty Level</span>
                        </div>
                        <p class="text-secondary">Easy-Moderate</p>
                    </div>
                </div> --}}

                <div class="row mt-5 g-4 align-items-start">
                    <div class="col-md-6">
                        <ul class="list-unstyled text-secondary">
                            <li><i aria-hidden="true" class="fas fa-check"></i><strong class="text-dark">Duration:</strong>
                                6 days | 4 nights</li>
                            <li><i aria-hidden="true" class="fas fa-check"></i><strong class="text-dark">Altitude:</strong>
                                12,500ft</li>
                            <li><i aria-hidden="true" class="fas fa-check"></i><strong
                                    class="text-dark">Experience:</strong> Beginner to intermediate</li>
                            <li><i aria-hidden="true" class="fas fa-check"></i><strong class="text-dark">Best Time:</strong>
                                December, January, March, April</li>
                            <li><i aria-hidden="true" class="fas fa-check"></i><strong class="text-dark">Base
                                    Camp:</strong> Sankri, Dehradun 200km</li>
                        </ul>
                        <p class="mt-3">Embark on a thrilling Kedarkantha trek with Shiva Adventures! This winter
                            wonderland trek takes you through enchanting forests, snow-capped peaks, and traditional
                            villages. Summit Kedarkantha peak at 12,500 feet and witness a breathtaking panoramic view of
                            the Himalayas. Book your adventure now!</p>

                        <div style="background: #00819E !important"
                            class="alert text-white d-flex align-items-center mt-4" role="alert">
                            <span class="material-icons me-2"><i aria-hidden="true" class="far fa-snowflake"></i></span>
                            <span>Snowfall Update: Last Snowfall reported on 17 Jan, 2024</span>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded">
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" placeholder="Mobile No.">
                                </div>
                                <button type="submit" class="btn btn-warning w-100 text-white fw-semibold">Plan My
                                    Trek</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

            {{-- got bigger --}}
            <div class="container my-5">
                <div class="row align-items-center group-banner">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-Trek-Summit.jpeg?resize=1024%2C768&ssl=1"
                            alt="Group Trekking Photo" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <h2>Got <span class="fw-bold">Bigger group?</span></h2>
                        <p>Get upto <span class="highlight">40% Group Discount!</span></p>
                        <a href="#" class="btn btn-book mt-3">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="container py-5">
                <div class="row">
                    <!-- LEFT Content Section -->
                    <div class="col-lg-9">
                        <div class="section-box mb-4">
                            <h4 class="text-primary">Trek Overview</h4>
                            <small class="text-muted">Know more about India’s Most Popular Winter trek</small>

                            <!-- Carousel -->
                            <div id="trekCarousel" class="swiper mySwiper mt-4 mb-4">
                                <div class="swiper-wrapper">

                                    <!-- Review 1 -->
                                    <div class="swiper-slide">
                                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-5.webp?fit=1200%2C1600&ssl=1"
                                            class="d-block w-100 rounded" alt="Trek Image 1">
                                    </div>

                                    <!-- Review 2 -->
                                    <div class="swiper-slide">
                                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-6.webp?fit=768%2C1024&ssl=1"
                                            class="d-block w-100 rounded" alt="Trek Image 2">
                                    </div>

                                    <!-- Review 3 -->
                                    <div class="swiper-slide">
                                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-7.webp?fit=1200%2C1600&ssl=1"
                                            class="d-block w-100 rounded" alt="Trek Image 3">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-10.webp?fit=1200%2C1600&ssl=1"
                                            class="d-block w-100 rounded" alt="Trek Image 3">
                                    </div>

                                </div>

                                <!-- Swiper Pagination & Arrows -->
                                <div class="swiper-pagination mt-3"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            {{-- <div id="trekCarousel" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-5.webp?fit=1200%2C1600&ssl=1"
                                            class="d-block w-100 rounded" alt="Trek Image 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-6.webp?fit=768%2C1024&ssl=1"
                                            class="d-block w-100 rounded" alt="Trek Image 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-7.webp?fit=1200%2C1600&ssl=1"
                                            class="d-block w-100 rounded" alt="Trek Image 3">
                                    </div>
                                </div>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#trekCarousel" data-bs-slide-to="0"
                                        class="active"></button>
                                    <button type="button" data-bs-target="#trekCarousel" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#trekCarousel" data-bs-slide-to="2"></button>
                                </div>
                            </div> --}}

                            <div class="text-center mb-4">
                                <a href="#" class="btn btn-primary-custom">Book Now</a>
                            </div>

                            <!-- Info List -->
                            <ul>
                                <li><strong>Pickup & Drop:</strong> Prince Chowk near railway station Dehradun</li>
                                <li><strong>Pickup Timing:</strong> 6 AM to 7:30 AM morning</li>
                                <li><strong>Available network:</strong> BSNL & Jio</li>
                                <li><strong>Trek Route:</strong> Dehradun – Mussoorie – Nainbag – Purola– Mori– Sankari –
                                    Jainiola camp – Base camp– kedarkantha summit</li>
                            </ul>

                            <!-- Overview Description -->
                            <p>
                                Embark on an adventure of a lifetime with Shiva Adventures on the Kedarkantha trek! Nestled
                                in the picturesque Himalayan mountain range, the Kedarkantha trek is an exhilarating
                                experience that offers stunning views of snow-capped peaks, frozen lakes, and ancient
                                temples. And with Shiva Adventures, you can take on this challenge with a team of
                                experienced guides who will ensure your safety and comfort every step of the way...
                            </p>

                            <!-- Two Images Side-by-Side -->
                            <div class="row my-4">
                                <div class="col-md-6">
                                    <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-Trek-Campsite.webp?resize=1024%2C768&ssl=1"
                                        class="img-fluid rounded mb-3" alt="Trek Image">
                                </div>
                                <div class="col-md-6">
                                    <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-trek-Shiva-Adventures-12.webp?resize=1024%2C768&ssl=1"
                                        class="img-fluid rounded mb-3" alt="Trek Image">
                                </div>
                            </div>

                            <!-- More Description -->
                            <p>The trek takes you through breathtaking landscapes, including the frozen lake of Juda Ka
                                Talab, and the Kedarkantha Base Camp...</p>

                            <p>With Shiva Adventures, you can rest assured that every aspect of your trek is taken care
                                of...</p>

                            <p>So, what are you waiting for? Join Shiva Adventures today and experience the thrill of a
                                lifetime...</p>

                            <!-- Final CTA Image -->
                            <div class="text-center mt-4">
                                <img src="https://i0.wp.com/shivaadventures.com/wp-content/uploads/2023/09/Kedarkantha-Trek-Summit.jpeg?resize=1024%2C768&ssl=1"
                                    class="img-fluid rounded mb-3" alt="Final CTA">
                                <a href="#" class="btn btn-primary-custom">Let’s Plan for Trek</a>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT Booking Sidebar -->
                    <div class="col-lg-3">
                        <div class="booking-sidebar">
                            <p class="text-muted small">★★★★★<br><strong>"400+ People booked this trek in last 14
                                    days"</strong></p>
                            <a href="#" class="btn btn-warning text-white">Book Now</a>
                            <a href="#" class="btn btn-outline-warning">Call Now</a>
                            <ul>
                                <li>Leading Trekking Organization</li>
                                <li>Best service Guaranteed</li>
                                <li>10 Years+ Experience</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            {{-- looking for trusted --}}
            <div class="container my-5">
                <div class="row align-items-center trusted-banner">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="https://www.advenchar.com/wp-content/uploads/2021/12/Best-Trekking-Companies-in-India-Advenchar-Mt.-Yunam-Peak.png"
                            alt="Trekking Scene" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <h2>Looking for a trusted <br><span class="fw-bold">Trekking company?</span></h2>
                        <ul class="trusted-list">
                            <li>Leading Trekking Organisation in India</li>
                            <li>15 Years+ Experience</li>
                            <li>Best service Guaranteed</li>
                        </ul>
                        <a href="#" class="btn btn-trek mt-3">Book Your trek &gt;&gt;</a>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="container py-5">

                <!-- Itinerary -->
                <div class="card-section">
                    <h4 class="text-primary">Trek Itinerary</h4>
                    <p class="text-muted">Detailed Day-by-Day Trek Schedule</p>
                    <ul class="custom-list">
                        <li><strong>Day 1: Arrival at Sankri</strong><br>
                            <span>Distance: 210km<br>
                                Timing: 8/9 hrs<br>
                                Altitude: 6,400 ft</span><br>
                            Upon arrival at Sankri, you'll meet the team, check-in, and rest.
                        </li>
                        <li><strong>Day 2: Sankri to Jainola Campsite</strong></li>
                        <li><strong>Day 3: Jainola Campsite - Juda Ka Talab - Kedarkantha Base Camp</strong></li>
                        <li><strong>Day 4: Summit + Return to Jainola</strong></li>
                        <li><strong>Day 5: Jainola Campsite to Sankri and Departure</strong></li>
                    </ul>
                </div>

                <!-- Dates -->
                <div class="card-section">
                    <h4 class="text-primary">Dates</h4>
                    <p class="text-muted">Find the best suitable dates for you</p>
                    <ul>
                        <li><strong>November:</strong> All Dates available</li>
                        <li><strong>December:</strong> All Dates available</li>
                        <li><strong>January:</strong> All Dates available</li>
                        <li><strong>February:</strong> All Dates available</li>
                        <li><strong>March:</strong> All Dates available</li>
                    </ul>
                    <p class="text-muted">Note: Fixed batches run every day from November to February. Customized packages
                        available.</p>
                    <button class="btn btn-primary">Check Your Dates</button>
                </div>

                <!-- Package Option -->
                <div class="card-section">
                    <h4 class="text-primary">PACKAGE OPTION:</h4>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="card p-3">
                                <h6>Kedarkantha Trek<br>(Ex Sankri)</h6>
                                <p class="text-orange">INR 6000/-</p>
                                <small>No Transportation<br>Accommodation + Food<br>Camping + Trekking Equipments</small>
                                <button class="btn-orange mt-2">Book Now</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-3">
                                <h6>Kedarkantha Trek<br>(Ex Dehradun)</h6>
                                <p class="text-orange">INR 7500/-</p>
                                <small>Transportation<br>Accommodation + Food<br>Camping + Trekking Equipments</small>
                                <button class="btn-orange mt-2">Book Now</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-3">
                                <h6>Kedarkantha Trek<br>(Premium)</h6>
                                <p class="text-orange">INR 13,999/-</p>
                                <small>Transportation<br>Premium Food<br>Premium Camping + Trekking Equipments</small>
                                <button class="btn-orange mt-2">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What Trekkers Say -->
                <div class="card-section">
                    <h4 class="text-primary">What Trekkers Says</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>"Unforgettable journey with breathtaking views. Highly recommend Shiva Adventures!"
                                - Sneha</blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>"Amazing experience with helpful guides. Trek was unforgettable!" - Rakesh
                            </blockquote>
                        </div>
                    </div>
                    <div class="text-center">
                        <img src="google-rating.png" alt="Google Rating" class="my-2">
                        <br>
                        <button class="btn btn-primary">Join the Squad!</button>
                    </div>
                </div>

                <!-- Inclusion / Exclusion -->
                <div class="card-section">
                    <h4 class="text-primary">Inclusion/Exclusion</h4>
                    <p class="text-muted">Find out what is included in your package</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Inclusion:</h6>
                            <ul class="checklist">
                                <li>Transportation From Dehradun</li>
                                <li>Accommodation on sharing basis</li>
                                <li>Meals (Dinner Day 1 to Lunch Day 5)</li>
                                <li>High quality camping equipment</li>
                                <li>Forest permission charges</li>
                                <li>First Aid Kit, Oxygen</li>
                                <li>Experienced Trek Leaders</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Exclusion:</h6>
                            <ul class="crosslist">
                                <li>Meals During Transportation</li>
                                <li>Personal Expenses / Insurance</li>
                                <li>Private Offload Baggage</li>
                                <li>Accommodation in Dehradun</li>
                                <li>Medical/accidental costs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>🧗‍ Still in Doubt?</p>
                        <button class="btn-orange-outline">Call us</button>
                    </div>
                </div>

                <!-- Important Info -->
                <div class="card-section">
                    <h4 class="text-primary">Important Info</h4>
                    <ul class="custom-list">
                        <li>Things to carry</li>
                        <li>Cancellation Policy</li>
                        <li>Refund Policy</li>
                    </ul>
                </div>

            </div>
        </div>

    </main>

@endsection
