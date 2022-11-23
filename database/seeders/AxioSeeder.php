<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Axio;
use Illuminate\Database\Seeder;

class AxioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $axio=Axio::create([
            'judul'=>'axio',
            'deskaxio'=>'bgdjscjjjjjjwssssssssssssmmmmmmmnnnnnnnnnnnnnnnnnnnnnnnnnnnnn',
        ]);
    }
}
