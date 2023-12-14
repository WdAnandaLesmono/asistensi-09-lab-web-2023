<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'Umur' => rand(17, 40),
            'Tempat_Lahir' => 'Makassar',
            'Tempat_Tinggal' => 'Perangkat Lunak',
        ]);

        User::create([
            'name' => 'Gembol',
            'role' => 'teacher',
            'email' => 'tsGemboll@teacher.com',
            'password' => bcrypt('Gembol'),
            'Umur' =>  rand(17, 40),
            'Tempat_Lahir' => 'Daya',
            'Tempat_Tinggal' => 'tamalanrea',
        ]);

        User::create([
            'name' => 'Haidah',
            'role' => 'teacher',
            'email' => 'haidah@teacher.com',
            'password' => bcrypt('Haidah'),
            'Umur' =>  rand(17, 40),
            'Tempat_Lahir' => 'Antang',
            'Tempat_Tinggal' => 'antang',
        ]);
        User::create([
            'name' => 'Hasmia',
            'role' => 'student',
            'email' => 'hasmia@student.com',
            'password' => bcrypt('hasmia'),
            'Umur' =>  rand(17, 40),
            'Tempat_Lahir' => 'Luwu',
            'Tempat_Tinggal' => 'admin',
        ]);       
        User::create([
            'name' => 'Susanti',
            'role' => 'student',
            'email' => 'susantii9261@student.com',
            'password' => bcrypt('susanti'),
            'Umur' =>  rand(17, 40),
            'Tempat_Lahir' => 'Luwu',
            'Tempat_Tinggal' => 'admin',
        ]);        
    }
}
