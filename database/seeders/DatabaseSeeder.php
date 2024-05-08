<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserDefaultSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ResumeSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(PortfoliosSeeder::class);
    }
}
