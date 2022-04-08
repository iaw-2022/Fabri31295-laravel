<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{

    public function run()
    {
        Category::create(['name' =>'Fotografia']);
        Category::create(['name' =>'Ilustraciones']);
        Category::create(['name' =>'Stickers']);
        Category::create(['name' =>'Diseño 3D']);
    }
}
