<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computer Accessories',
            'slug' => 'accessories',
            'description' => 'Moouse, keyboard, laptop stands, and others',
            'images' => 'img\for-seeder\categories\noImage.png'
        ]);

        Category::create([
            'name' => 'Peripherals and Cables:',
            'slug' => 'peripherals',
            'description' => 'Printer, speaker, controller, and others',
            'images' => 'img\for-seeder\categories\noImage.png'
        ]);

        Category::create([
            'name' => 'Protectors and Bags:',
            'slug' => 'protectors',
            'description' => 'laptop sleeve, bag, screen protector, and others',
            'images' => 'img\for-seeder\categories\noImage.png'
        ]);
    }
}
