<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sejarah;
use Illuminate\Database\Seeder;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sejarah=Sejarah::create([
            'nama'=>'SEJARAH SEKOLAH',
            'deskripsi'=>'adalah berikut',
        ]);
    }
}
