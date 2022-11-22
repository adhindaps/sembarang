<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Beasiswa;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beasiswa=Beasiswa::create([
            'name'=>'SEJARAH SEKOLAH',
            'desk'=>'adalah berikut inii',
        ]);
    }
}
