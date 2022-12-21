<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Silaras;
use Illuminate\Database\Seeder;

class SilarasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $silaras=Silaras::create([
            'nama'=>'silaras',
            'judul'=>'Fasilitasi Peningkatan Partisipasi Dunia Usaha/Dunia Industri
            Dalam Mewujudkan Penyelarasan Kejuruan (Link&Match) di SMK dilaksanakan Melalui Layanan
            “SiLARAS”',
            'deskripsilaras'=>' <p>Sebagaimana diamanatkan dalam UU Nomor 20 Tahun 203 tentang Sistem Pendidikan Nasional,
            sekolah menengah kejuruan bertujuan untuk menyiapkan lulusannya terutama untuk bekerja.
            Hal ini mengandung makna bahwa lulusan SMK dipersiapkan untuk mengisi struktur tenaga
            kerja terampil level menengah guna mendukung perkembangan dunia usaha dunia industri.
        </p>
        <p>Perekonomian Indonesia memiliki potensi yang sangat besar dengan kondisinya yang relatif
            stabil. Pada tahun 2030, Indonesia berpotensi untuk menjadi negara ke 7 dengan tingkat
            ekonomi terbesar di dunia. Ini merupakan loncatan yang signifikan dari posisinya di
            peringkat ke 16 pada tahun 2012. Dalam jangka waktu 15 tahun ke depan,
            akan terjadi lonjakan kebutuhan tenaga kerja dari 55 juta pada saat ini menjadi 113 juta
            di tahun 2030. Peluang bisnis sebesar 1.8 triliun US Dollar - antara lain di bidang
            jasa, pertanian, dan perikanan - juga diproyeksikan akan tercipta (McKinsey, 2012). Oleh
            sebab itu tersedianya sumberdaya manusia (tenaga kerja) dalam jumlah memadai dan dengan
            keterampilan yang tepat bisa membuat Indonesia menjadi tempat yang menarik bagi
            investasi yang bisa menggerakkan pembangunan.</p>
        <p>Visi Direktorat Pembinaan SMK adalah Terbentuknya Insan dan Ekosistem Pendidikan Kejuruan
            Yang Berkarakter Berlandaskan Gotong Royong. Untuk mewujudkan visi tersebut terdapat
            beberapa misi, yaitu: 1) Mewujudkan pelaku pendidikan sekolah menengah kejuruan yang
            kuat; 2) Mewujudkan akses sekolah menengah kejuruan yang meluas, merata dan berkeadilan
            3) Memwujudkan pembelajaran yang bermutu di sekolah menengah kejuruan serta 4)
            Mewujudkan penguatan tata kelola serta peningkatan efektifitas birokrasi dan pelibatan
            publik.</p>
        <p>Untuk mendukung usaha pencapaian misi tersebut, Subdit Penyelarasan Kejuruan dan
            Kerjasama Industri yang merupakan salah satu subdit yang ada di Dit. PSMK
            menyelenggarakan fungsi “Penyusunan Bahan Perumusan, Koordinasi, Dan Pelaksanaan
            Kebijakan Di Bidang Penyelarasan Kejuruan Dan Kerjasama Industri Sekolah Menengah
            Kejuruan”. Dan secara khusus Seksi Penyelarasan Kejuruan salah satunya melaksanakan
            tugas untuk “Pelaksanaan Kebijakan Bidang Penyelarasan Kejuruan Bagi SMK”.

            Dalam melaksanakan tugas dan fungsi di seksi tersebut dan dengan memperhatikan kebutuhan
            penyiapan SDM yang terampil yang mendukung pertumbuhan industri diperlukan optimalisasi
            layanan yang memfasilitasi partisipasi dunia usaha/dunia industri dalam mendukung
            terwujudnya penyelarasan kejuruan di SMK (link&match)”.</p>
',
        ]);
    }
}
