@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Kedarkantha Winter Trek')
@section('content')

<!-- Hero Section -->
<section class="">
    <div class="w-full grid grid-cols-2">
        <img src="/images/kedarkantha1.jpg" class="w-full h-[60vh] object-cover" alt="Kedarkantha Trek">
        <img src="/images/kedarkantha2.jpg" class="w-full h-[60vh] object-cover" alt="Snow Trek">
    </div>
</section>

<!-- Trek Info Card -->
<section class="py-10 bg-white">
    <div class="max-w-4xl mx-auto bg-white shadow rounded p-6">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-2">Kedarkantha Winter Trek</h2>
        <p class="text-center text-sm text-gray-500 mb-6">Experience the best of snow adventure in Uttarakhand</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center text-sm">
            <div>
                <p class="font-semibold">Region</p>
                <p class="text-blue-700">Uttarakhand</p>
            </div>
            <div>
                <p class="font-semibold">Trek Distance</p>
                <p class="text-blue-700">20 km</p>
            </div>
            <div>
                <p class="font-semibold">Max Altitude</p>
                <p class="text-blue-700">12,500 ft</p>
            </div>
            <div>
                <p class="font-semibold">Difficulty</p>
                <p class="text-blue-700">Easy</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div class="text-sm text-gray-600">
                <ul class="list-disc pl-4">
                    <li><strong>Duration:</strong> 5 Days / 4 Nights</li>
                    <li><strong>Base Camp:</strong> Sankri</li>
                    <li><strong>Snow Time:</strong> Mid Nov to April</li>
                    <li><strong>Experience Level:</strong> Beginner to Intermediate</li>
                    <li><strong>Group Size:</strong> 15 - 25</li>
                </ul>
                <p class="mt-3">Join the Kedarkantha Trek for a scenic winter escape, perfect for beginners looking to step into the world of snow trekking. Witness pine forests, frozen lakes, and panoramic Himalayan peaks.</p>
                <p class="text-blue-500 mt-2">Snowfall Update: Last snowfall reported on 07 Jan 2024</p>
            </div>
            <form class="bg-gray-100 p-4 rounded shadow">
                <input type="text" class="w-full mb-2 p-2 border" placeholder="Name">
                <input type="email" class="w-full mb-2 p-2 border" placeholder="Email">
                <input type="tel" class="w-full mb-2 p-2 border" placeholder="Mobile No.">
                <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded">Plan My Trek</button>
            </form>
        </div>
    </div>
</section>

<!-- Repeating Package Plans -->
<section class="bg-white py-10">
    <div class="max-w-4xl mx-auto space-y-8">
        @for ($i = 1; $i <= 6; $i++)
            <div class="bg-white border rounded shadow p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="text-sm text-gray-600">
                        <ul class="list-disc pl-4">
                            <li><strong>Duration:</strong> 5 Days / 4 Nights</li>
                            <li><strong>Base Camp:</strong> Sankri</li>
                            <li><strong>Snow Time:</strong> Mid Nov to April</li>
                            <li><strong>Experience Level:</strong> Beginner to Intermediate</li>
                            <li><strong>Best For:</strong> Solo, Groups & Photographers</li>
                        </ul>
                        <p class="mt-3">Trek through pine forests, meadows, and snow slopes. Summit views include Swargarohini, Black Peak, and Bandarpunch.</p>
                        <p class="text-blue-500 mt-2">Snowfall Update: Last snowfall reported on 07 Jan 2024</p>
                    </div>
                    <form class="bg-gray-100 p-4 rounded shadow">
                        <input type="text" class="w-full mb-2 p-2 border" placeholder="Name">
                        <input type="email" class="w-full mb-2 p-2 border" placeholder="Email">
                        <input type="tel" class="w-full mb-2 p-2 border" placeholder="Mobile No.">
                        <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded">Plan My Trek</button>
                    </form>
                </div>
            </div>
        @endfor
    </div>
</section>

<!-- Package Options -->
<section class="bg-white py-10">
    <div class="max-w-4xl mx-auto">
        <h3 class="text-xl font-bold mb-4">PACKAGE OPTION:</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="border p-4 rounded shadow">
                <h4 class="font-bold">Ex Sankri</h4>
                <p class="text-blue-600">INR 6,000/-</p>
                <ul class="text-sm text-gray-600 list-disc pl-4 mt-2">
                    <li>Accommodation & Food</li>
                    <li>Guide</li>
                    <li>Permits</li>
                </ul>
                <button class="mt-3 w-full bg-yellow-500 text-white py-2 rounded">Book Now</button>
            </div>
            <div class="border p-4 rounded shadow">
                <h4 class="font-bold">Ex Dehradun</h4>
                <p class="text-blue-600">INR 7,500/-</p>
                <ul class="text-sm text-gray-600 list-disc pl-4 mt-2">
                    <li>Includes Travel to Base</li>
                    <li>All Facilities in Base Plan</li>
                </ul>
                <button class="mt-3 w-full bg-yellow-500 text-white py-2 rounded">Book Now</button>
            </div>
            <div class="border p-4 rounded shadow">
                <h4 class="font-bold">Premium Plan</h4>
                <p class="text-blue-600">INR 13,999/-</p>
                <ul class="text-sm text-gray-600 list-disc pl-4 mt-2">
                    <li>Transport from Delhi</li>
                    <li>Accommodation + Food</li>
                    <li>Premium Camping Gear</li>
                </ul>
                <button class="mt-3 w-full bg-yellow-500 text-white py-2 rounded">Book Now</button>
            </div>
        </div>
    </div>
</section>

@endsection
