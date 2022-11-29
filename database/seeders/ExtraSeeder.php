<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Extra;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->insert([
            'fotoex' => 'paskib.jpeg',
            'logo' => 'brigpasda.jpg',
            'subjudul' => 'Tentang Paskib',
            'extra' => 'Paskibraka',
            'deskripsi' => '<p>Paskibra atau Pasukan Pengibar Bendera merupakan pasukan yang bertugas untuk
             menaikkan bendera merah putih saat upacara hari Senin atau upacara peringatan nasional lain. Paskibra juga memiliki tugas untuk menaikkan dan menurunkan bendera pada peringatan hari kemerdekaan RI 17 Agustus di tingkat sekolah saja.</p>'
        ]);
        DB::table('extras')->insert([
            'fotoex' => 'pmr.jpg',
            'logo' => 'pmi.png',
            'subjudul' => 'Tentang PMR',
            'extra' => 'PMR',
            'deskripsi' => '<p>Palang Merah Remaja (disingkat PMR) adalah wadah pembinaan dan pengembangan anggota remaja PMI, yang selanjutnya disebut PMR.
             Terdapat di PMI kota atau kabupaten di seluruh Indonesia, dengan anggota lebih dari 5 juta orang, anggota PMR merupakan salah satu kekuatan PMI dalam melaksanakan kegiatan-kegiatan kemanusiaan dibidang kesehatan dan siaga bencana, mempromosikan prinsip-prinsip dasar gerakan palang merah dan bulan sabit merah internasional, serta mengembangkan kapasitas organisasi PMI.</p>'
        ]);
        DB::table('extras')->insert([
            'fotoex' => 'pramuka.jpeg',
            'logo' => 'CDA.jpg',
            'subjudul' => 'Tentang Pramuka',
            'extra' => 'Pramuka',
            'deskripsi' => '<p>Pramuka adalah singkatan dari Praja Muda Karana yang memiliki arti “Rakyat muda yang suka berkarya”. Di Indonesia gerakan ini diperkenalkan secara resmi pada 14 Agustus 1961 oleh Presiden Pertama Indonesia, Ir Soekarno.</p>'
        ]);
    }
}
