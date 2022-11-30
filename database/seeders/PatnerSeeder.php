<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Patner;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PatnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patners')->insert([
            'nama' => 'jtv',
            'link' => 'http://jtv.co.id',
            'fotopatner' => 'jtv.jpg',
        ]);
        DB::table('patners')->insert([
            'nama' => 'mocca',
            'link' => 'https://mocca.studio/',
            'fotopatner' => 'mocca.jpg',
        ]);
        DB::table('patners')->insert([
            'nama' => 'axioo class',
            'link' => 'http://www.axiooclassprogram.org',
            'fotopatner' => 'axio.jpg',
        ]);
        DB::table('patners')->insert([
            'nama' => 'mikrotik',
            'link' => 'http://www.mikrotikacademy.com',
            'fotopatner' => 'mikrotik.jpg',
        ]);
        DB::table('patners')->insert([
            'nama' => 'good',
            'link' => 'http://www.goodnewsfromindonesia.com',
            'fotopatner' => 'good.png',
        ]);
        DB::table('patners')->insert([
            'nama' => 'luminor',
            'link' => 'http://www.luminorhotel.com',
            'fotopatner' => 'luminor.jpg',
        ]);
        DB::table('patners')->insert([
            'nama' => 'javaparagon',
            'link' => 'http://www.javaparagon.com',
            'fotopatner' => 'javaparagon.png',
        ]);
    }
}
