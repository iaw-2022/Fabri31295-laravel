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
            'url' => 'https://drive.google.com/uc?id=1mxqRMbxMmtfQ30CbsqBeujSeBgx7ToEw&export=media',
            'category' => 'Fotografia',
            'resolution' => '1920x1080'

        ]);

        Image::create([
            'name' => 'Ronaldo',
            'date' => Carbon::parse('2022-02-01'),
            'price' => '100',
            'url' => 'https://drive.google.com/uc?id=11pUU6yS9HvLUOaXGYvK-1dq3v9SxxEOM&export=media',
            'category' => 'Ilustraciones',
            'resolution' => '2560x960'
        ]);

        Image::create([
            'name' => 'Neymar',
            'date' => Carbon::parse('2022-01-03'),
            'price' => '300',
            'url' => 'https://drive.google.com/uc?id=1CUOweaBn-GV5cR3vqQYZP_DH-yyk-c9t&export=media',
            'category' => 'Diseño 3D',
            'resolution' => '800x600'
        ]);

        Image::create([
            'name' => 'Rondon',
            'date' => Carbon::parse('2022-04-03'),
            'price' => '50',
            'url' => 'https://drive.google.com/uc?id=1iFICYlKERBcJ4yZxrgKx3rkXbDMu90N_&export=media',
            'category' => 'Stickers',
            'resolution' => '800x600'
        ]);
    }
}
