<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'seller_id' => 1,
            'category_id' => 1,
            'productName' => 'Rexus Clif Vertical Mouse Wireless Connection Garansi Resmi - Putih, Free Mousepad',
            'slug' => 'rexus-clif-vertical-mouse-wireless-connection-garansi-resmi-putih-free-mousepa',
            'price' => 144000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'Mouse Vertical Wireless Rexus Clif menawarkan kebebasan wireless dengan dual connection melalui Bluetooth dan 2.4GHz, memberikan fleksibilitas dalam cara Anda terhubung ke perangkat. Performanya akurat berkat sensor Pixart PAW 3212 dengan sensitivitas empat tahap, mulai dari 800 hingga 2400 DPI, yang memungkinkan Anda mengatur respons mouse sesuai kebutuhan. Anda juga mendapatkan baterai gratis dan fitur sleep otomatis untuk menghemat daya. Desain ergonomis vertikalnya yang nyaman mengurangi ketegangan pergelangan tangan dan ketidaknyamanan saat penggunaan berjam-jam.',
            'notes' => 'Mouse ini hadir dalam dua pilihan warna, yaitu hitam dan putih, serta dilengkapi dengan 7 tombol untuk berbagai pengaturan dan kompatibilitas dengan tablet Android dan iOS.',
            'quantity' => 10,
            'rating' => 4.8
        ]);

        Products::create([
            'seller_id' => 3,
            'category_id' => 1,
            'productName' => 'Gamen Titan III / 3 RGB Mechanical Gaming Keyboard - BlackGrey, Blue Switch',
            'slug' => 'gamen-titan-iii-3-rgb-mechanical-gaming-keyboard-blackgrey-blue-switch',
            'price' => 309000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'keunggulan,Outemu Blue Switch,tombol yang kuat dengan ketahanan 50 juta kali,Swappable 3 pin switch,Kualitas Switch A+,16 mode warna RGB backlight,suasana bermain game jadi lebih menyenangkan,Poros mekanis yang dapat dipasang,66 tombol dengan letak yang ringkas,Ergonomic design sehingga bermain lebih nyaman,Keycaps bahan PBT,kuat dan tahan lama daripada bahan ABS,Dilengkapi 2 kaki anti slip,Cocok untuk gamer, pekerja kantor, sekolah, dan lain-lain.',
            'notes' => 'model:titan-iii,number-of-keys:66,switch:blue-pluggable,input:5v-180ma',
            'quantity' => 15,
            'rating' => 4.9
        ]);
        
        Products::create([
            'seller_id' => 1,
            'category_id' => 3,
            'productName' => 'NYK Nemesis A95 / a-95 Albatros QHD Webcam with 2k Resolution - Putih',
            'slug' => 'nyk-nemesis-a95-a-95-albatros-qhd-webcam-with-2k-resolution-putih',
            'price' => 409000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'NYK A95 Albatros is a Professional Streamer Webcam that already equipped with Built-In Mic, Quad High Definition Real 2K, 30FPS Frame Rate, Full 360 Degree Rotation, Auto Focus, and have 2 Colours ( Black and White). Also this webcam only plug and play, no need to setting.',
            'notes' => 'Quad High Definition Real 2K Flexible And Adjustable. Its unique fold and go design. Lets you make video calls from anywhere.',
            'quantity' => 20,
            'rating' => 4.7
        ]);
        
        Products::create([
            'seller_id' => 1,
            'category_id' => 3,
            'productName' => 'Noir NUHC24 / NUHC-24 4in1 USB type C Hub 4 port Macbook',
            'slug' => 'noir-nuhc24-nuhc-24-4in1-usb-type-c-hub-4-port-macbook',
            'price' => 169000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'For those who seek more options to connect your other peripheral device, we present you NOIR USB HUB TYPE A 24 (NUHC24)! With 4 options of USB 3.0 Type A slot for boosting your productivity and elevating gaming experience!',
            'notes' => 'Compatible with windows os,android os, and mac os.',
            'quantity' => 12,
            'rating' => 4.5
        ]);

        Products::create([
            'seller_id' => 1,
            'category_id' => 3,
            'productName' => 'M-Tech Eksternal DVD RW Laptop PC USB 2.0 External DVD Original Resmi',
            'slug' => 'm-tech-eksternal-dvd-rw-laptop-pc-usb-20-external-dvd-original-resmi',
            'price' => 189000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'produk:m-tech-original-eksternal-dvd-rw-laptop-pc-usb-20-external-dvd,jenis:external-dvd-rw,brand:m-tech,tipe:dvd-rw-usb-20,conector:usb-20-plug-n-play,compatible:universal-for-pc-laptop-all-device,support:burning-install-driver-play-movie-game,high-speed-reading-disc',
            'notes' => 'isi Paket : 1 set DVDRW Eksternal ( Kabel Power, USB data, Driver, DVD RW).',
            'quantity' => 30,
            'rating' => 4.6
        ]);
        
        Products::create([
            'seller_id' => 1,
            'category_id' => 2,
            'productName' => 'Fantech Smart Life Kabel Charger KM102 / KL102 / KC102 Fast Charging - MICRO USB',
            'slug' => 'fantech-smart-life-kabel-charger-km102-kl102-kc102-fast-charging-micro-usb',
            'price' => 65000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'Kabel data & charger yang didesain khusus dengan bahan berkualitas sehingga memiliki durabilitas tinggi, 5x lebih tangguh dari kabel biasa.',
            'notes' => 'Garansi Resmi 12 Bulan Fantech Life',
            'quantity' => 50,
            'rating' => 5.0
        ]);

        Products::create([
            'seller_id' => 1,
            'category_id' => 3,
            'productName' => 'Sleeve with Stand Tas Laptop Sarung Case Macbook Pro Air 11 13 15 inch - Abu-abu, 15 inch',
            'slug' => 'sleeve-with-stand-tas-laptop-sarung-case-macbook-pro-air-11-13-15-inch-abu-abu-15-inch',
            'price' => 150000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'Excellent Quality and Slim Design: Portable, compact, water-resistance, shockproof and anti-scratch; Slim design allows the sleeve easily sliding into backpack, perfect for daily use or travel',
            'notes' => 'Sleeve with Stand Tas Laptop / Sarung untuk semua laptop termasuk Macbook Pro / Macbook Air',
            'quantity' => 20,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 1,
            'category_id' => 3,
            'productName' => 'SCREEN GUARD PROTECTOR LAPTOP 14 inch ANTIGORES NOTEBOOK ASUS LENOVO',
            'slug' => 'screen-guard-protector-laptop-14-inch-antigores-notebook-asus-lenovo',
            'price' => 40000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'Size : 30.9cm x 17.4cm (16:9)',
            'notes' => 'Packing carton sesuai dengan gambar. Untuk pengiriman akan kami tambahkan packing kardus lg (diluar packing karton) untuk mencegah screen protector terlipat atau rusak di ekspedisi. Mohon jika anda memesan screen protector ini jgn pesan barang lain yg tidak sejenis / berbeda ukuran volume nya (selain keyboard protector) seperti speaker karena takut bisa terlipat screen protectornya.',
            'quantity' => 60,
            'rating' => 4.7
        ]);

        Products::create([
            'seller_id' => 1,
            'category_id' => 3,
            'productName' => 'BASEUS ADAMAN FAST CHARGING POWER BANK QUICK CHARGE 4.0 3.0 TYPE C PD - black 20 000mAH',
            'slug' => 'baseus-adaman-fast-charging-power-bank-quick-charge-4.0-3.0-type-c-pd-black-20000mah',
            'price' => 299000,
            'image' => 'img/for-seeder/product/noImage.jpg',
            'description' => 'Mendukung pengisian cepat dua arah PD3.0 + QC3.0. Kompatibel dengan QC3.0, PD3.0, FCP, AFC, dapat dengan cepat mengisi ulang untuk iP, Mi, Huawei, Samsung dan ponsel lainnya. Delapan jaminan untuk keamanan. Arus keluaran cocok secara otomatis sehingga perangkat yang terisi daya tidak akan menjadi panas bahkan untuk pengisian yang lama.',
            'notes' => 'PENGIRIMAN LUAR PULAU JAWA TIDAK BISA VIA UDARA,HANYA BISA VIA JALUR LAUT/DARAT ESTIMASI SAMPAI 2-3 MINGGU',
            'quantity' => 77,
            'rating' => 4.9
        ]);

    }
}
