<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'icon' => '11.jpg',
            'judul' => 'Pengajar Kompeten',
            'deskripsi' => 'Kualifikasi pengajar S1 dan S2 dari lulusan kampus ternama
            dan memiliki sertifikasi keahlian.',
        ]);
        DB::table('abouts')->insert([
            'icon' => '12.jpg',
            'judul' => 'Fasilitas Lengkap',
            'deskripsi' => 'Penunjang belajar dengan kualitas premium.',
        ]);
        DB::table('abouts')->insert([
            'icon' => '13.jpg',
            'judul' => 'Program Beasiswa',
            'deskripsi' => 'Banyak Progeam Beasiswa untuk melanjutkan Pendidikan yang
            Lebih Tinggi.',
        ]);
        DB::table('abouts')->insert([
            'icon' => '14.jpg',
            'judul' => 'Alumni Berkualitas',
            'deskripsi' => 'Alumni siap kerja, siap kuliah dan siap berwirausaha. Alumni
            tersebar di berbagai negara Seperti Jepang, Turki, Paris, Jerman, dan lain-lain',
        ]);
        DB::table('abouts')->insert([
            'icon' => '15.jpg',
            'judul' => 'Prestasi',
            'deskripsi' => 'Memiliki segudang prestasi baik tingkat lokal, regional
            maupun nasional.',
        ]);
        DB::table('abouts')->insert([
            'icon' => '16.jpg',
            'judul' => 'Kurikulum Merdeka',
            'deskripsi' => 'Merdeka Belajar Telkom Schools (MBTS) dengan 4 Pilar yaitu
            SDM GURU, Pendidikan Karakter Siswa, KURIKULUM dan Moderenisasi Sarana Prasaranasekolah.',
        ]);
    }
}
