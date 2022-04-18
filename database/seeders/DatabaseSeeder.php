<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'silvervale',
            'image_name' => 'silvervalefanart.png',
        ]);

        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'adultgorou',
            'image_name' => 'adultgoroudone.png',
        ]);

        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'chibialbedo',
            'image_name' => 'albedo.png',
        ]);
        
        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'ayato',
            'image_name' => 'ayato.png',
        ]);

        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'baizhu',
            'image_name' => 'baizhu.png',
        ]);

        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'bunny',
            'image_name' => 'bunny.png',
        ]);

        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'vex',
            'image_name' => 'adultgoroudone.png',
        ]);

        \App\Models\Artwork::factory()->create([
            'artwork_name' => 'adultgorou',
            'image_name' => 'adultgoroudone.png',
        ]);


        \App\Models\Commission::factory()->create([
            'com_name' => 'mycommission Lajos',
            'com_age' => '23',
            'com_gender' => 'Male',
            'com_details' => 'megtalalhato',
            'com_image' => NULL,
            'com_status' => '0',
        ]);
    }
}
