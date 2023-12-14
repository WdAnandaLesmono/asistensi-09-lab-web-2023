<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seller::create([
            'name' => 'Rexus',
            'slug' => 'rexus',
            'bio' => 'Rexus Official Store adalah akun resmi dari Rexus Indonesia di Tokopedia. Rexus Made for Everyone. Everyone is Gamers.',
            'images' => 'img/for-seeder/seller/noImage.png',
            'banner' => 'noImage.png',
            'seller_category' => 1,
            'address' => 'Jakarta Pusat',
            'email' => 'rexus@gmail.com',
            'password' => bcrypt('rexusid'),
            'phone_number' => '6282211008668'
        ]);
        
        Seller::create([
            'name' => 'Fantech',
            'slug' => 'fantech',
            'bio' => 'Fantech is one of the world’s fastest growing gear brands for gamers.',
            'images' => 'img/for-seeder/seller/noImage.png',
            'banner' => 'noImage.png',
            'seller_category' => 2,
            'address' => 'Jakarta barat',
            'email' => 'marketingfantech@gmail.com',
            'password' => bcrypt('fantechid'),
            'phone_number' => '6281119032720'
        ]);

        Seller::create([
            'name' => 'Others',
            'slug' => 'others',
            'bio' => 'Others store',
            'images' => 'img/for-seeder/seller/noImage.png',
            'banner' => 'noImage.png',
            'seller_category' => 3,
            'address' => 'Indonesia',
            'email' => 'abc@gmail.com',
            'password' => bcrypt('otherid'),
            'phone_number' => '628000000000'
        ]);
    }
}