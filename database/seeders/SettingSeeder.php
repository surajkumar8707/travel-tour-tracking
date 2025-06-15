<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Construction Mivan Technology LLP',
            'email' => 'Construction.mivan@gmail.com, corp@mivantechnology.com',
            'whatsapp' => '9324394183',
            'contact' => '9324394183',
            'address' => 'Sadhu medicine complex fatehpur Siwan Bihar 841226',
            'header_image' => "assets/front/images/header.jpg",
            'is_fresh' => 1,
        ]);
    }
}
