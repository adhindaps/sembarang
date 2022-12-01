<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Galeri_axios;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GaleriAxioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri_axios')->insert([
            'namakegiatan' => 'kunjungan axio',
            'foto1' => '1.jpg',
        ]);
    }
}
