@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Tungnath Chandrashila')
@section('content')

<section class="pt-4">
    <div class="container-fluid p-0">
        <img src="{{ asset('images/treks/tungnath-chandrashila-banner.jpg') }}" alt="Tungnath Chandrashila Trek" class="img-fluid w-100">
    </div>
</section>

<section class="pt-5 pb-4 bg-light">
    <div class="container">
        <div class="bg-white shadow rounded p-4">
            <h2 class="text-center mb-2">Tungnath–Chandrashila Trek</h2>
            <p class="text-center text-muted mb-4">Best weekend trek in Himalayas</p>

            <div class="row text-center mb-3">
                <div class="col-md-3">
                    <strong>Region:</strong> Uttarakhand
                </div>
                <div class="col-md-3">
                    <strong>Trek Distance:</strong> 6 km – 8 km
                </div>
                <div class="col-md-3">
                    <strong>Max Altitude:</strong> 12,083 ft
                </div>
                <div class="col-md-3">
                    <strong>Difficulty:</strong> Easy
                </div>
            </div>

            <ul class="list-unstyled">
                <li><strong>Duration:</strong> 3 Days / 2 Nights</li>
                <li><strong>Base Camp:</strong> Sari Village</li>
                <li><strong>Best Season:</strong> March to June & September to December</li>
                <li><strong>Experience Level:</strong> Beginner to Intermediate</li>
            </ul>

            <p>
                The Tungnath–Chandrashila trek is a short yet scenic trek ideal for beginners and weekend adventurers. It passes through beautiful meadows, ancient temples, and offers panoramic Himalayan views including peaks like Nanda Devi and Trishul. The trek includes a visit to Tungnath, the highest Shiva temple in the world.
            </p>

            <h4 class="mt-5">Trek Itinerary</h4>
            <ul class="list-unstyled">
                <li><strong>Day 1:</strong> Drive from Rishikesh to Sari Village (190 km / 7-8 hrs)</li>
                <li><strong>Day 2:</strong> Trek from Sari to Deoriatal and then to Chopta (8 km)</li>
                <li><strong>Day 3:</strong> Trek from Chopta to Tungnath and Chandrashila, then return to Sari and drive back to Rishikesh</li>
            </ul>

            <h4 class="mt-5">Inclusions</h4>
            <ul>
                <li>Transportation from Rishikesh and back</li>
                <li>Accommodation (camping / guesthouses)</li>
                <li>All meals during trek (veg)</li>
                <li>Trek guide and permits</li>
            </ul>

            <h4 class="mt-4">Exclusions</h4>
            <ul>
                <li>Personal expenses</li>
                <li>Porter charges</li>
                <li>Travel insurance</li>
                <li>Anything not mentioned in inclusions</li>
            </ul>

            <h4 class="mt-5">Package Options</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 border rounded">
                        <h6>Ex Chopta</h6>
                        <p>INR 5,999/-</p>
                        <ul>
                            <li>Includes: Guide, Accommodation, Food</li>
                        </ul>
                        <button class="btn btn-primary">Book Now</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border rounded">
                        <h6>Ex Rishikesh</h6>
                        <p>INR 8,499/-</p>
                        <ul>
                            <li>Includes: Transportation, Guide, Accommodation, Food</li>
                        </ul>
                        <button class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>

            <h4 class="mt-5">FAQs</h4>
            <ul>
                <li>What is the best time to do Tungnath–Chandrashila trek?</li>
                <li>Is the trek suitable for children?</li>
                <li>Can I customize the itinerary?</li>
                <li>Do I need prior trekking experience?</li>
            </ul>
        </div>
    </div>
</section>

@endsection
