<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Silaras;
use Illuminate\Database\Seeder;

class SilarasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $silaras=Silaras::create([
            'nama'=>'silaras',
            'judul'=>'axio',
            'deskripsilaras'=>'bgdjscjjjjjjwssssssssssssmmmmmcjdifvjbrrjmnnnnn',
        ]);
    }
}
