<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@dikochan.com',
            'password' => '$2y$10$JDuuOLjR0/TssIU/AGNjW.uXCoU0PpfD3GrXISoH2nAkCzVPqK2nu',
            'userType' => '1',
        ]);

        \App\Models\User::factory()->create([
            'id' => '2',
            'name' => 'Juliska',
            'email' => 'juli0123@gmail.com',
            'password' => '$2y$10$JDuuOLjR0/TssIU/AGNjW.uXCoU0PpfD3GrXISoH2nAkCzVPqK2nu',
            'userType' => '0',
        ]);


        // Hozzáad a "Juliska" felhasználónak megrendeléseket

        \App\Models\Commission::factory()->create([
            'user_id' => '2',
            'com_name' => 'Laran',
            'com_age' => '15',
            'com_gender' => 'male',
            'com_details' => 'He has blue eyes, short brown hair and a piercing in his nose. I want a portrait commission.',
            'com_image' => '',
            'com_status' => '4',
        ]);

        \App\Models\Commission::factory()->create([
            'user_id' => '2',
            'com_name' => 'Ori',
            'com_age' => '20',
            'com_gender' => 'other',
            'com_details' => 'She is a robot. she doesnt really has a gender but we give her a girlie face. Her face is girlish but bald, make it green and grey partial',
            'com_image' => '',
            'com_status' => '2',
        ]);
    }
}
