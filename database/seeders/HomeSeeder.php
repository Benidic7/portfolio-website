<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = User::pluck('id', 'name');

        Home::create([
            'user_id' => $userId['Benidic Espinosa'],
            'first_name' => 'Benidic',
            'last_name' => 'Espinosa',
            'position' => 'Web Developer',
            'description' => "Crafting digital experiences one line of code at a time. As a web developer, I bring ideas to life in the virtual realm, turning creativity into clickable reality. Let's build something extraordinary together.",
            'cv' => 'benidic_cv.pdf',
            'propic' => 'benidic.png',
            'facebook' => 'https://web.facebook.com/benidic.espinosa',
            'instagram' => 'https://www.instagram.com/bedicasonipse/',
            'linkedin' => 'https://www.linkedin.com/in/benidic-espinosa-8722a02b1/',
            'github' => 'https://github.com/Benidic7',
        ]);
    }
}
