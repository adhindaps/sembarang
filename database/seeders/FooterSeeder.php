<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Footer;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'logo' => '10.png',
            'namasekolah' => 'SMK NEGERI 1 DLANGGU',
            'deskripsi' => '<p>adalah Sekolah Menengah Kejuruan Negeri yang berbasis Teknologi dan Pariwisata untuk mencetak lulusan yang siap menjadi professional muda 
            di bidang teknologi dan pariwisata, berjiwa religius, cinta tanah air serta berwirausaha. 
            Dengan  dukungan sumber daya manusia pengajar yang berkuwalitas dan sarana prasarana yang lengkap demi menjawab kebutuhan dunia usaha dan industri Indonesia	
            </p>',
        ]);
    }
}
