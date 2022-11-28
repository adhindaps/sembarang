<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kajur;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KajurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kajurs')->insert([
            'fotokajur' => 'nimas.png',
            'nama' => 'Nimas Setya Y . ST',
            'nip' => '19650915 198903 1 013',
            'id_jurusan' => '1'
        ]);
        DB::table('kajurs')->insert([
            'fotokajur' => 'lila.JPG',
            'nama' => 'Lila Suryani, S.Pd',
            'nip' => '19650915 198903 1 013',
            'id_jurusan' => '6'
        ]);
    }
}
