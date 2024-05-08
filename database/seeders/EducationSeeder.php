<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = User::pluck('id', 'name');

        $educations = [
            [
                'user_id' => $userId['Benidic Espinosa'],
                'level' => 'Tertiary',
                'school' => 'Southern Leyte State University - Tomas Oppus',
                'year' => '2020 - 2024',
                'address' => 'San Isidro, Tomas Oppus, Southern Leyte',
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'level' => 'Secondary',
                'school' => 'Libagon National High School',
                'year' => '2014 -2020',
                'address' => 'Jubas, Libagon, Southern Leyte',
            ],
            [
                'user_id' => $userId['Benidic Espinosa'],
                'level' => 'Elementary',
                'school' => 'Libagon Central Elementary School',
                'year' => '2007 - 2014',
                'address' => 'Jubas, Libagon, Southern Leyte',
            ]
        ];

        foreach($educations as $education){
            Education::create($education);
        }
    }
}
