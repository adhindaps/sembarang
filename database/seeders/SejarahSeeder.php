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
            'fotosjr'=>'1.jpg',
            'nama'=>'SEJARAH SEKOLAH',
            'deskripsi'=>'<p>Jadi, sejak SMKN 1 Dlanggu berdiri sampai sekarang telah berganti kepemimpinan sebanyak 4 kali. Dari tahun ke tahun siswa yang mendaftar di sekolah kami semakin banyak, begitu pula dengan prestasi yang diukir juga bertambah banyak, karena banyak juara yang diraih oleh siswa siswi dari sekolah kami. SMKN 1 Dlanggu mempunyai visi dan misi yang sangat relevan dan cocok untuk sekolah kami.</p>',
        ]);
    }
}
