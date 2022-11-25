<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Sambutan;
use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sambutan=Sambutan::create([
            'Judul'=>'Sambutan Kepala Sekolah',
            'sambutan'=>'<p>Selamat datang di Website kami di Sekolah Menengah Kejuruan Negri 1 Dlanggu. 
            Website ini kami tujukan untuk seluruh guru, karyawan dan siswa serta masyarakat umum agar dapat mengakses seluruh informasi tentang profil, aktifitas/kegiatan serta fasilitas sekolah secara berkala dan update. Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan website ini lebih lanjut. Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur sesuai dengan motto sekolah kita. 
            </p>',
        ]);
    }
}
