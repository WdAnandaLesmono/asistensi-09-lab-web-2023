<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Content::create([
            'title' => 'Kalkulus Dasar',
            'content' => 'Limit, Kontinuitas, Turunan dan Integral',
            'teacher_name' => 'Gembol',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Kalkulus Lanjut',
            'content' => 'Aturan Rantai dan Aturan Produk',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Persamaan Diferensial',
            'content' => 'Persamaan Diferensial Biasa (ODE)',
            'teacher_name' => 'Gembol',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Kalkulus Vektor dan Ruang',
            'content' => 'Vektor dalam Ruang 2D dan 3D',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Kalkulus Tensor dan Analisis',
            'content' => 'Tensor dan Ruang Tensor',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Kalkulus Variasional',
            'content' => 'Prinsip Variasional',
            'teacher_name' => 'Gembol',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Kalkulus Dalam Fisika dan Teknik',
            'content' => 'Penerapan Kalkulus dalam Mekanika, Elektromagnetisme, dll.',
            'teacher_name' => 'Gembol',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Kalkulus Pada Ruang Fungsi Kompleks',
            'content' => 'Fungsi Kompleks dan Integral Kompleks',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Aljabar Linear',
            'content' => 'matriks dan vektor',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Teori Graf',
            'content' => 'Graf Terarah dan Tidak Terarah',
            'teacher_name' => 'Gembol',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Teori Bilangan',
            'content' => 'Bilangan Prima dan Faktorisasi',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Geometri Diferensial',
            'content' => 'Kurva dan Ruang Kurva',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        Content::create([
            'title' => 'Teori Sistem Dinamika',
            'content' => 'Model Sistem Dinamika',
            'teacher_name' => 'Gembol',
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Content::create([
            'title' => 'Kombinatorika',
            'content' => 'Permutasi dan Kombinasi',
            'teacher_name' => 'Haidah',
            'updated_at' => now(),
            'created_at' => now(),
        ]);
    }
}
