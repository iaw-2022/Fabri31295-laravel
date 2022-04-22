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
            'name' => 'image1',
            'date' => Carbon::parse('2022-01-01'),
            'price' => '120',
            'public_url' => 'https://www.dropbox.com/s/z8ui870megh76sv/image1.jpg?dl=0',
            'category_name' => 'Fotografia',
            'resolution_name' => '1920x1080'

        ]);

        Image::create([
            'name' => 'image2',
            'date' => Carbon::parse('2022-02-01'),
            'price' => '100',
            'public_url' => 'https://www.dropbox.com/s/xhkye6n7hk6m4yv/image2.jpg?dl=0',
            'category_name' => 'Ilustraciones',
            'resolution_name' => '2560x960'
        ]);

        Image::create([
            'name' => 'image3',
            'date' => Carbon::parse('2022-01-03'),
            'price' => '300',
            'public_url' => 'https://www.dropbox.com/s/sktwe20dqb31xi9/image3.jpg?dl=0',
            'category_name' => 'Diseño 3D',
            'resolution_name' => '800x600'
        ]);

        Image::create([
            'name' => 'image4',
            'date' => Carbon::parse('2022-04-03'),
            'price' => '50',
            'public_url' => 'https://www.dropbox.com/s/sktwe20dqb31xi9/image4.jpg?dl=0',
            'category_name' => 'Stickers',
            'resolution_name' => '800x600'
        ]);
    }
}
