<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Course::create([
            'course_name' => 'Kalkulus Dasar',
            'description' => 'Limit, Kontinuitas, Turunan dan Integral',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Gembol',
            'instructor_number'=>'85320170679',
        ]);

        Course::create([
            'course_name' => 'Kalkulus Vektor dan Ruang',
            'description' => 'Vektor dalam Ruang 2D dan 3D',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Haidah',
            'instructor_number'=>'85320170679',
        ]);

        Course::create([
            'course_name' => 'Aljabar Linier',
            'description' => 'matriks dan vektor',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Haidah',
            'instructor_number'=>'85320170679',
        ]);

        Course::create([
            'course_name' => 'Geometri Diferensial',
            'description' => 'Kurva dan Ruang Kurva',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Haidah',
            'instructor_number'=>'85320170679',
        ]);
        
        Course::create([
            'course_name' => 'Teori Sistem Dinamika',
            'description' => 'Model Sistem Dinamika',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Gembol',
            'instructor_number'=>'',
        ]);    
    }
}
