<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use Carbon\Carbon;

class ImagesSeeder extends Seeder
{
    public function run()
    {
        Image::create([
            'name' => 'Messi',
            'date' => Carbon::parse('2022-01-01'),
            'price' => '120',
            'category_name' => 'Fotografia',
            'resolution_name' => '1920x1080'

        ]);

        Image::create([
            'name' => 'Ronaldo',
            'date' => Carbon::parse('2022-02-01'),
            'price' => '100',
            'category_name' => 'Ilustraciones',
            'resolution_name' => '2560x960'
        ]);

        Image::create([
            'name' => 'Pavon',
            'date' => Carbon::parse('2022-01-03'),
            'price' => '300',
            'category_name' => 'Diseño 3D',
            'resolution_name' => '800x600'
        ]);
    }
}
