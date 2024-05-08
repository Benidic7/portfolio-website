<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = User::pluck('id', 'name');

        $skills = [
            [
                'user_id' => $userId['Benidic Espinosa'],
                'skills' => 'HTML',
                'percentage' => '75',
                'description' => "I continuously expand my skills and thrive when presented with complex development challenges. My passion is crafting robust, scalable, and visually appealing web applications that provide seamless user experiences. I'm excited to join a team where I can collaborate and continue growing as a developer while using my full-stack abilities to bring innovative ideas to life.",
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'skills' => 'CSS',
                'percentage' => '65',
                'description' => '',
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'skills' => 'JavaScript',
                'percentage' => '50',
                'description' => '',
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'skills' => 'PHP',
                'percentage' => '65',
                'description' => '',
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'skills' => 'Laravel',
                'percentage' => '70',
                'description' => '',
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'skills' => 'CodeIgniter',
                'percentage' => '70',
                'description' => '',
            ]
        ];

        foreach($skills as $skill){
            Skill::create($skill);
        }
    }
}
