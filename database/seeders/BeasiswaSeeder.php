<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Beasiswa;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beasiswa=Beasiswa::create([
            'name'=>'BEASISWA SEKOLAH',
            'desk'=>'Setelah lulus nanti, sudah putuskan mau lanjut kuliah atau kerja? Untuk kalian yang mau kuliah, kami punya kabar gembira buat kalian putih-abu! Kuliah di universitas ternama pastinya jadi salah satu impian setiap pelajar di Indonesia. Termasuk kamu ‘kan, pasti?

            Karena selain untuk mendapat gelar, kamu juga bisa mendapatkan pekerjaan yang sesuai dengan bidangmu. Tetapi, sekarang ini biaya kuliah di universitas-universitas ternama dan terakreditasi terbilang mahal.
            
            Nah, untuk itu kami berbagi informasi beasiswa-beasiswa khusus untuk SMK seperti kalian yang ingin melanjutkan pendidikan ke perguruan tinggi namun terkendala ekonomi.
            
            Bidik Misi  Program beasiswa yang hampir setiap tahun ditawarkan ini kembali membuka peluang beasiswa bagi pelajar Indonesia. Beasiswa Bidik Misi merupakan program bantuan biaya pendidikan yang ditujukan khusus untuk pelajar SMA / SMK yang ingin melanjutkan studi ke jenjang S1 tetapi memiliki kekurangan dalam hal ekonomi. Bagi Hi-Mates yang tertarik dengan program Bidik Misi ini, kalian bisa lihat syarat dan ketentuannya dihttp://bidikmisi.belmawa.ristekdikti.go.id/.
            Beastudi Etos  Beastudi Etos merupakan salah satu program beasiswa dari Dompet Dhuafa  yang di tujukan untuk lulusan SMA/SMK/Sederajat berprestasi yang akan melanjutkan pendidikan ke perguruan tinggi namun terhalang keadaan ekonomi melalui jalur Seleksi Nasional Masuk Perguruan Tinggi Negeri (SNMPTN), Seleksi Bersama Masuk Perguruan Tinggi Negeri (SBMPTN) dan ujian mandiri (UM) jalur reguler. Kalau kamu mau tau yang lebih banyak dan lebih lengkap lagi, klik ajahttp://www.beastudiindonesia.net/ .
            Beasiswa IDCloudHost  Kabar gembira untuk calon mahasiswa! IDCloudHost punya program beasiswa yang menarik buat kamu, lho. Program beasiswa IDCloudHost ini di berikan oleh salah satu penyedia layanan web hosting di Indonesia, PT. Cloud Hosting yang bekerja sama dengan Telkom University yang merupakan salah satu universitas terkemuka di Bandung. Selain mendapat bantuan dana beasiswa penuh di Telkom University, ada banyak keuntungan lainnya yang bisa kamu dapatkan, seperti fasilitas penginapan asrama, pengalaman kerja part-time Idi IDCloudHost, dan masih banyak yang lainnya. Tertarik? Coba jelajahi program beasiswa ini lebih dalam lagi dihttps://idcloudhost.com/beasiswa/.
            Beasiswa ILFTahun ini Indonesian Leadership Foundation kembali membuka program beasiswa mereka bagi kalian, pelajar SMA/SMK yang berkeinginan melanjutkan pendidikan ke perguruan tinggi. ILF akan memberimu bantuan berupa uang semester sampai kamu lulus nanti, lho. Sayangnya, beasiswa ini hanya ditujukan untuk kalian yang beragama Kristen atau Katolik yang ingin kuliah di universitas yang sudah terakreditasi. Nah, buat kalian yang berminat, download formulir pendaftarannya dihttp://www.indonesianleadership.org yuk!
            Beasiswa Universitas Nggak perlu galau kalau kamu merasa persyaratan beasiswa di atas terlalu berat. Biasanya, setiap universitas atau perguruan tinggi memiliki program beasiswanya sendiri dengan pilihan potongan biaya yang beragam. Syarat dan ketentuannya tentu lebih mudah dibanding program beasiswa dari luar. Kamu bisa tanya bagian humas universitas tujuanmu untuk informasi selengkapnya.',
        ]);
    }
}
