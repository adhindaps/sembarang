<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\GaleriEcho;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GaleriEchoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri_echoes')->insert([
            'namakegiatan' => 'kunjungan kebun coklat',
            'foto11' => '99.jpg',
        ]);
    }
}
