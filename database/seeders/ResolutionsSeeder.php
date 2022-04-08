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
    }
}
