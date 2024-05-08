<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\Resume;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homeId = Home::pluck('id', 'first_name');

        Resume::create([
            'home_id' => $homeId['Benidic'],
            'summary' => 'Driven intern web developer with a passion for learning, leveraging Laravel skills to build user-friendly websites, continuously improving coding abilities to transform unique ideas into innovative digital experiences.',
        ]);
    }
}
