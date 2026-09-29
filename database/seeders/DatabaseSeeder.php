<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. สร้างข้อมูลสาขาวิชาในตาราง program (ไม่มี s)
        DB::table('program')->insert([
            ['id' => 1, 'pgm_name' => 'Computer Science'],
            ['id' => 2, 'pgm_name' => 'Information Technology'],
            ['id' => 3, 'pgm_name' => 'Software Engineering'],
            ['id' => 4, 'pgm_name' => 'Data Science'],
            ['id' => 5, 'pgm_name' => 'Cyber Security'],
        ]);

        // 2. สร้างข้อมูลนักศึกษา 100 คนลงตาราง student
        Student::factory(100)->create();
    }
}