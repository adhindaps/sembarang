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
            'fotoecho'=>'sija.png',
            'judul'=>'adalah berikut inii',
            'deskripsi'=>'adalah dguejfheuchsjsjuberikut inii',
            'link'=>'https://youtu.be/wbmQOyvitXU',
            'jam'=>'00:33:00',
            'lokasi'=>'SMKN 1 Dlanggu',
            'alamat'=>'Jalan Jendral Ahmad Yani No.17, Kedunglengkong, Dlanggu, Jabaran, Pohkecik, Kec. Dlanggu, Kabupaten Mojokerto, Jawa Timur 61371',
        ]);
    }
}
