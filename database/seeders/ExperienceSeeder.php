<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = User::pluck('id', 'name');

        $experiences = [
            [
                'user_id' => $userId['Benidic Espinosa'],
                'experience' => 'Intern Web Developer',
                'year' => '2024 - Present',
                'address' => 'Bagong Bayan, Bato, Leyte',
                'description' => 'I made a lot of projects while working as an inter such as Portfolio Website, Student Registry, Booking System using Laravel. I contributed to our team in order to develop different system that improves my knowledge and skills in Programming.',
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'experience' => 'Capstone Programmer',
                'year' => '2023 - 2024',
                'address' => 'SLSU, Tomas Oppus, Southern Leyte',
                'description' => 'I developed the Cloud-Based Voting System as my Capstone Project, using CodeIgniter 3 HMVC.
                Implemented the Cloud-Based Voting System three times within the campus for different elections.',
            ]
        ];

        foreach($experiences as $experience){
            Experience::create($experience);
        }
    }
}
