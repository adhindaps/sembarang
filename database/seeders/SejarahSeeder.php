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
            'deskripsi'=>'<p>SMK Negeri 1 Dlanggu

            Berdiri pada tahun 2004, yang beralamat di Jl. Jend. A. Yani, No. 1 Pohkecik, Dlanggu, Mojokerto dengan luas tanah 2 Hektar. 
            
            Pada tahun 2004, di SMKN 1 Dlanggu hanya ada 2 jurusan, yaitu TKJ (Teknik Komputer dan Jaringan) dengan 2 rombel dan Tata Boga dengan 2 rombel, yang dipimpin oleh kepala sekolah yang pertama yaitu Ibu Sri Supeni, SE,M.Pd. Ibu Sri Supeni SE.M.Pd menjabat selama 3 tahun yaitu tahun 2004 – 2007. 
            
            Selanjutnya pada tahun 2007 – 2012 SMKN 1 Dlanggu dipimpin oleh kepala sekolah baru yaitu Bapak Drs. Aslich, dan jurusan di SMKN 1 Dlanggu bertambah 2 yaitu Multimedia dan RPL (Rekyasa Perangkat Lunak).
            
             Pada akhir tahun pelajaran 2012, kepemimpinan di SMKN 1 Dlanggu berganti lagi dengan kepala sekolah yang baru, yaitu Bapak Drs. H. Mochamad Hasjim,MM. beliau adalah kepala sekolah yang paling senior dari pimpinan sebelumnya, karena setelah menjabat di SMKN 1 Dlanggu beliau pensiun. Pada kepemimpinan Bapak Drs. H. Mochamad Hasjim jurusan di SMKN 1 Dlanggu bertambah 2 lagi yaitu APH (Akomodasi Perhotelan) dan Animasi. Beliau menjabat selama 2 tahun mulai dari tahun 2012 – 2014 akhir. Karena di SMKN 1 Dlanggu menggunakan kurikulum 2013, maka kata “jurusan” di sini berubah menjadi “paket keahlian”. Setelah akhir tahun 2014 sampai sekarang kepemimpinan di sekolah kami berganti lagi sampai sekarang dipimpin oleh Bapak Muharto, S.Pd,MM.
            
            Jadi, sejak SMKN 1 Dlanggu berdiri sampai sekarang telah berganti kepemimpinan sebanyak 4 kali. Dari tahun ke tahun siswa yang mendaftar di sekolah kami semakin banyak, begitu pula dengan prestasi yang diukir juga bertambah banyak, karena banyak juara yang diraih oleh siswa siswi dari sekolah kami. SMKN 1 Dlanggu mempunyai visi dan misi yang sangat relevan dan cocok untuk sekolah kami.</p>',
        ]);
    }
}
