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
            'judul'=>'Sudut Baca Echo',
            'deskripsi'=>'<p>Program Kerja Sudut Baca Echo

            Kegiatan Rutin
            
            Pelayanan pengunjung Sudut Baca "Berikan layanan terbaik untuk pengunjung cafe yang ingin berliterasi. Senyum, salam dan sapa menjadi bentuk pelauamam prima."
            Penambahan buku sudut baca “Menambah koleksi buku yang ada disudut baca sesuai kebutuhan dan keinginan pengunjung. Terciptanya sudut baca yang nyaman dan berkualitas.”
            Penggantian buku sudut baca "Buku yang terdisplay akan diganti secara periodik. Menghindari kebosanan pengunjung cafe untuk memanfaatkan sudut baca."
            Penggantian majalah berkala “Majalah baru akan mengisi display majalah sudut baca. Menyesuaikan usia pengunjung cafe.”
            Penggantian isi papan unjuk karya “Wadah terbaik untuk pengunjung menampilkan karya-karya nya. Bisa dalam berbagai bentuk sesuai keinginan dan kreativitas pengunjung.”
            KULIT (KUnjungan LITerasi) “Membawa dampak baik pengetahuan dari literasi dengan memanfaatkan teknologi multimedia”
            Rapat rutin pengurus sudut baca "Menjadi ajang konsolidasi pengurus untuk meningkatkan pelayanan kepada pengunjung dan evaluasi program yang berjalan".
            
            Kegiatan Insidental
            
            Koordinasi dengan perpustakaan daerah "Membangun jejaring dan bermitra dengan lembaga yang lebih tinggi. Sinergi program strategis dan berbagi pengalaman.".
            Pelatihan "Selalu upgrade kemampuan dan ilmu untuk pelayanan sudut baca echo yang lebih baik. Menambah wawasan dan pengalaman baru."
            Doorprize Pengunjung "Memberikan hadiah yang akan meningkatkan semangat untuk belajar terus dan lebih aktif berliterasi."
            ANDONG MAJA (Aksi Dongeng Remaja) "Sebagai wadah untuk menampung hobi remaja yang suka dengan dongeng. Mengambil hikmah dari literasi dongeng."
            ANDONG CILIK (Aksi Dongeng Cilik) "Membangun budaya membaca dan bercerita kepada pengunjung anak-anak. Penanaman karakter sejak dini kepada anak-anak.".
            PENTOL BAKAR (Pentas Olah Bakat dan Karya) "Wahana mengembangkan diri dan potensi. Ajang unjuk karya dan kemampuan untuk menginspirasi orang lain."
            RAPER (Remaja Bawa Perubahan) "Berlatih diskusi dan presentasi setelah literasi buku. Meningkatkan daya nalar dan kreativitas."
            Kampanye Digital Literasi "Menularkan kegemaran membaca buku dan berliterasi melalui internet"
            TALI SUNJUNG (Tabungan Literasi Pengunjung) "Memberikan kesempatan kepada pengunjung untuk berkontribusi dan merasa memiliki sudut literasi echo"
            
            </p>',
            'link'=>'https://youtu.be/wbmQOyvitXU',
            'jam'=>'00:33:00',
            'lokasi'=>'SMKN 1 Dlanggu',
            'alamat'=>'Jalan Jendral Ahmad Yani No.17, Kedunglengkong, Dlanggu, Jabaran, Pohkecik, Kec. Dlanggu, Kabupaten Mojokerto, Jawa Timur 61371',
        ]);
    }
}
