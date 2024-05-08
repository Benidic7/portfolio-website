<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homeId = Home::pluck('id', 'first_name');
        $contactId = Contact::pluck('id', 'email');

        About::create([
            'home_id' => $homeId['Benidic'],
            'contact_id' => $contactId['benidicespinosa30@gmail.com'],
            'birth_date' => '09/02/2002',
            'website' => 'https://benidicespinosa.online',
            'city' => 'Southern Leyte, Philippines',
            'degree' => 'BSIT - Programming',
            'freelance' => 'Available'
        ]);
    }
}
