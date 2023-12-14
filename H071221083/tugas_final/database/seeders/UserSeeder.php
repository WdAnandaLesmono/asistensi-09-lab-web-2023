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
            'name' => 'Muhammad Nabil Shadiq',
            'birthdate' => '2004-04-15',
            'username' => 'naaoi',
            'email' => 'naooiiselamanya@gmail.com',
            'primary_phone_number' => '081352455134',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('SorryYaAkuMabok')
        ]);
        User::factory(23)->create();
    }
}
