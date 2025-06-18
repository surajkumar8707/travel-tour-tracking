@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Valley Of Flowers')
@section('content')

<section class="pt-5">
    <div class="container">
        <!-- Hero Banner -->
        <div class="row mb-4">
            <div class="col-md-12">
                <img src="/images/valley-of-flowers-banner.jpg" alt="Valley of Flowers Trek" class="img-fluid w-100 rounded shadow">
            </div>
        </div>

        <!-- Trek Header Info -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="text-center text-primary">Valley of Flowers</h2>
            <p class="text-center">A Spiritual Journey to the Abode of Lord Shiva</p>
            <div class="row text-center border-bottom pb-3">
                <div class="col-md-3"><strong>Region:</strong> Uttarakhand</div>
                <div class="col-md-3"><strong>Trek Distance:</strong> 44km</div>
                <div class="col-md-3"><strong>Max Altitude:</strong> 15,246 ft</div>
                <div class="col-md-3"><strong>Difficulty:</strong> Easy to Moderate</div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <ul>
                        <li><strong>Duration:</strong> 6 Days / 5 Nights</li>
                        <li><strong>Base Camp:</strong> Govindghat</li>
                        <li><strong>Snow Time:</strong> July to Mid-August</li>
                        <li><strong>Experience Required:</strong> Beginner to Intermediate</li>
                        <li><strong>Best For:</strong> Nature Enthusiasts, Group Trekkers</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form class="bg-light p-3 rounded">
                        <div class="mb-2">
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="text" placeholder="Phone Number" class="form-control">
                        </div>
                        <button class="btn btn-warning w-100">Plan My Trek</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Trek Overview -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h4 class="mb-3">Trek Overview</h4>
            <p>
                Nestled amidst the Garhwal Himalayas, the Valley of Flowers is a UNESCO World Heritage Site, located in Uttarakhand, India. It's renowned for its pristine beauty, vibrant alpine blooms, and breathtaking Himalayan vistas. The trek offers a mesmerizing experience through lush meadows, dense forests, and a wide variety of exotic flora.
            </p>
        </div>

        <!-- Itinerary -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h4 class="mb-3">Trek Itinerary</h4>
            <ul>
                <li><strong>Day 1:</strong> Haridwar to Joshimath (Drive - 270km)</li>
                <li><strong>Day 2:</strong> Joshimath to Govindghat to Ghangaria</li>
                <li><strong>Day 3:</strong> Trek to Valley of Flowers and return to Ghangaria</li>
                <li><strong>Day 4:</strong> Trek to Hemkund Sahib and return</li>
                <li><strong>Day 5:</strong> Ghangaria to Govindghat to Joshimath</li>
                <li><strong>Day 6:</strong> Drive back to Haridwar</li>
            </ul>
        </div>

        <!-- Package Options -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h4 class="mb-3">Package Options</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="border p-3 rounded">
                        <h5>Ex Rishikesh - INR 10,999</h5>
                        <p>Includes transportation, meals, and accommodation</p>
                        <button class="btn btn-primary">Book Now</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded">
                        <h5>Ex Dehradun - INR 8,999</h5>
                        <p>Includes transport and guide</p>
                        <button class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h4 class="mb-3">What Trekkers Say</h4>
            <blockquote>
                "The trek to Valley of Flowers was a dream come true. Every turn had a postcard view!" - <strong>Sneha</strong>
            </blockquote>
            <blockquote>
                "A perfect blend of nature and spirituality. Highly recommended!" - <strong>Mehul</strong>
            </blockquote>
        </div>

        <!-- Inclusions / Exclusions -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h4 class="mb-3">Inclusion/Exclusion</h4>
            <h6>Inclusions:</h6>
            <ul>
                <li>All meals (veg), accommodation, transport</li>
                <li>Trekking equipment, permits, and expert guide</li>
            </ul>
            <h6>Exclusions:</h6>
            <ul>
                <li>Any kind of personal expenses or tips</li>
                <li>Insurance or medical cost</li>
            </ul>
        </div>

        <!-- Important Info -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h4 class="mb-3">Important Info</h4>
            <ul>
                <li>Best time to visit: Mid-July to August</li>
                <li>Carry valid ID proof and emergency contacts</li>
                <li>Packed light woolens and rain gear</li>
            </ul>
        </div>

        <!-- FAQs -->
        <div class="bg-white p-4 rounded shadow-sm mb-5">
            <h4 class="mb-3">FAQs</h4>
            <ul>
                <li><strong>Q:</strong> How long is the Valley of Flowers trek?<br><strong>A:</strong> 6 Days, 5 Nights</li>
                <li><strong>Q:</strong> Is this trek suitable for beginners?<br><strong>A:</strong> Yes, it is easy to moderate level.</li>
                <li><strong>Q:</strong> What should I pack?<br><strong>A:</strong> Raincoat, trekking shoes, thermal wear, ID proof</li>
            </ul>
        </div>
    </div>
</section>

@endsection
