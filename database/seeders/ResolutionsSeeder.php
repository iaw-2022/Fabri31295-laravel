<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resolution;

class ResolutionsSeeder extends Seeder
{

    public function run()
    {
        Resolution::create(['name' => '1:1']);
        Resolution::create(['name' => '16:9']);
        Resolution::create(['name' => '4:5']);
        Resolution::create(['name' => '5:7']);
        Resolution::create(['name' => '2:3']);
    }
}
