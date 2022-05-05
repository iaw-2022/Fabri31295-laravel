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
            'public_url' => 'https://drive.google.com/uc?id=1mxqRMbxMmtfQ30CbsqBeujSeBgx7ToEw&export=media',
            'category_name' => 'Fotografia',
            'resolution_name' => '1920x1080'

        ]);

        Image::create([
            'name' => 'Ronaldo',
            'date' => Carbon::parse('2022-02-01'),
            'price' => '100',
            'public_url' => 'https://drive.google.com/uc?id=11pUU6yS9HvLUOaXGYvK-1dq3v9SxxEOM&export=media',
            'category_name' => 'Ilustraciones',
            'resolution_name' => '2560x960'
        ]);

        Image::create([
            'name' => 'Neymar',
            'date' => Carbon::parse('2022-01-03'),
            'price' => '300',
            'public_url' => 'https://drive.google.com/uc?id=1CUOweaBn-GV5cR3vqQYZP_DH-yyk-c9t&export=media',
            'category_name' => 'Diseño 3D',
            'resolution_name' => '800x600'
        ]);

        Image::create([
            'name' => 'Rondon',
            'date' => Carbon::parse('2022-04-03'),
            'price' => '50',
            'public_url' => 'https://drive.google.com/uc?id=1iFICYlKERBcJ4yZxrgKx3rkXbDMu90N_&export=media',
            'category_name' => 'Stickers',
            'resolution_name' => '800x600'
        ]);
    }
}
