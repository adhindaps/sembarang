<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Axio;
use Illuminate\Database\Seeder;

class AxioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $axio=Axio::create([
            'judul'=>'CLASS AXIO',
            'deskaxio'=>'<p>Untuk membantu para siswa sekolah menegah kejuruan (SMK) agar menjadi lulusan yang siap kerja, maka Axioo menggulirkan Axioo Class Program. Program ini berupa pemberian pelatihan berbasis kompetensi industri, belajar memperbaiki produk-produk Axioo, dan juga praktek kewirausahaan.

            “Dunia IT berkembang dengan sangat cepat. Namun saat ini masih ada gap antara apa yang diajarkan di sekolah dengan kebutuhan industri. Melalui Axioo Class Program, kami berusaha melakan sinkronisasi kurikulum, agar yang dilakukan di sekolah lebih sesuai dengan kebutuhan industri,” kata Timmy Theopelus, Education Program Director Axioo, dalam keterangan pers Kamis (8/12/2016).
            
            Program yang aktif bergulir sejak 2015 ini sudah melibatkan lebih dari 210 SMK dan 60.000 siswa. Lulusannya juga banyak yang direkrut menjadi karyawan Axioo, atau membuka bisnis di bidang handphone dan komputer.
            
            
            “Axioo Class Program juga menggunakan konsep tutor sebaya, jadi para siswanya juga diarahkan untuk mengajarkan satu sama lain,” kata Timmy lagi.
            
            
            Para siswa yang mengikuti Axioo Class Program merupakan siswa-siswa terbaik yang dipilih langsung oleh pihak sekolah. Pelatihannya diberikan sejak mereka duduk di kelas 10 hingga nantinya lulus dan siap memasuki dunia kerja. Selain itu, program-program pelatihan Axioo juga menyasar para penyandang disabilitas.
            </p>
            ',
            'vidio'=>'https://www.youtube.com/watch?v=4C-XHxX7l4A',
        ]);
    }
}
