<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Voting System',
                'category' => 'Capstone Project',
                'client' => 'Student Supreme Council',
                'project_date' => '2023-03-20',
                'project_description' => "In my Capstone Project I made a Cloud-Based Voting System aimed to streamline the voting process and make it more accessible for students. I developed it using CodeIgniter 3 HMVC. It allows students to cast their votes remotely as it's an online voting, it keeps everything safe and makes sure only the right people can vote. This makes voting simple and fair for everyone.",
                'slug' => 'voting-system',
            ],
            [
                'title' => 'Snack House',
                'category' => 'Web Development Project',
                'client' => 'WebDev Instructor',
                'project_date' => '2023-04-24',
                'project_description' => "For our final Web Development project, my groupmate and I collaborated to create the Snack House System using the CodeIgniter 3 HMVC Framework. This innovative system enables customers to subscribe to snack plans or customize their own snack for specific months. Our goal was to simplify the snack subscription process and enhance customer satisfaction.",
                'slug' => 'snack-house',
            ],
            [
                'title' => 'Canigao Booking System',
                'category' => 'Internship Project',
                'client' => 'Canigao Island Staff',
                'project_date' => '2024-03-05',
                'project_description' => "In my internship, my team and I developed a Booking System for Canigao Island using Laravel 10. Collaborating with three co-dev interns, we aimed to streamline the booking process for tourists by enabling them to book in advance online. Throughout the project, I actively contributed by implementing various functionalities and features, ensuring the successful development of the system.",
                'slug' => 'canigao-booking-system',
            ]
        ];

        foreach($portfolios as $portfolio){
            Portfolio::create($portfolio);
        }
    }
}
