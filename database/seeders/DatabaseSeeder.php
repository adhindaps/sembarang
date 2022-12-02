<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
       $this->call([
        AboutSeeder::class,
        AxioSeeder::class,
        BeasiswaSeeder::class,
        EchoSeeder::class,
        ExtraSeeder::class,
        FooterLinkSeeder::class,
        FooterSeeder::class,
        GaleriAxioSeeder::class,
        GaleriEchoSeeder::class,
        GaleriSeeder::class,
        GuruSeeder::class,
        JurusanSeeder::class,
        KajurSeeder::class,
        PatnerSeeder::class,
        ProfileSeeder::class,
        SambutanSeeder::class,
        SejarahSeeder::class,
        SilarasSeeder::class,
        UserSeeder::class,
        VideoSeeder::class,
        VisiSeeder::class,
       ]);
    }
}
