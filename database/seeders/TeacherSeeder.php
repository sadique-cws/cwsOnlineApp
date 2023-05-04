<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'wasik',
            'email' => 'rock@gmail.com',
            'contact' => '9955015651',
            'password' => '123456789'
        ];

        Teacher::create($data);
    }
}
