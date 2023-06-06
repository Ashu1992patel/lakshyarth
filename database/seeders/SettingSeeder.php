<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'logo' => 'logo.png',
            'company_full_name' => "Ghunsaur Farmer Producer Company Ltd.",
            'company_short_name' => "GFPC",
            'address' => "Ghunsaur, Jabalpur",
            'contact_primary' => "9144444124",
            'contact_secondary' => "9144444124",
            'email' => "help@lakshyarth.com",
            'footer_text' => "Copyright 2019 All Right Reserved By Lakshyarth Foordgrain",
            'banner_image' => "frontend/images/banner.jpg",
            'box_image_1' => "frontend/images/img1.jpg",
            'box_image_2' => "frontend/images/img2.jpg",
            'box_image_3' => "frontend/images/img3.jpg",
        ]);
    }
}
