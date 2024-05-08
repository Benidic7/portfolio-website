<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homeId = Home::pluck('id', 'first_name');

        Contact::create([
            'home_id' => 1,
            'email' => 'benidicespinosa30@gmail.com',
            'phone' => '09982634101',
            'address' => 'Jubas, Libagon, Southern Leyte',
            'zip_code' => '6615',
        ]);
    }
}
