<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resolution;

class ResolutionsSeeder extends Seeder
{

    public function run()
    {
        Resolution::create(['name' => '500x500', 'aspect_ratio' => '1:1']);
        Resolution::create(['name' => '1920x1080', 'aspect_ratio' => '16:9']);
        Resolution::create(['name' => '2560x960', 'aspect_ratio' => '4:5']);
        Resolution::create(['name' => '960x600', 'aspect_ratio' => '16:10']);
        Resolution::create(['name' => '800x600', 'aspect_ratio' => '4:3']);
        Resolution::create(['name' => '2560x1080', 'aspect_ratio' => '5:3']);
        Resolution::create(['name' => '3840x1600', 'aspect_ratio' => '24:10']);
        Resolution::create(['name' => '3554x1999', 'aspect_ratio' => '16:9']);
        Resolution::create(['name' => '1024x768', 'aspect_ratio' => '4:3']);
        Resolution::create(['name' => '2800x2100', 'aspect_ratio' => '4:3']);
        Resolution::create(['name' => '1400x1050', 'aspect_ratio' => '4:3']);
        Resolution::create(['name' => '640x960', 'aspect_ratio' => '3:2']);
        Resolution::create(['name' => '480x800', 'aspect_ratio' => '5:3']);
        Resolution::create(['name' => '1440x1080', 'aspect_ratio' => '4:3']);
        Resolution::create(['name' => '3440x1440', 'aspect_ratio' => '21:9']);
    }
}
