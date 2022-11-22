<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Sudutecho;
use Illuminate\Database\Seeder;

class EchoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sudutecho=sudutecho::create([
            'foto'=>'sija.jpg',
            'judul'=>'adalah berikut inii',
            'deskripsi'=>'adalah dguejfheuchsjsjuberikut inii',
        ]);
    }
}
