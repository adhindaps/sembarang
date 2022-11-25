<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusans')->insert([
            'foto' => 'sija.png',
            'jurusan' => 'SISTEM INFORMASI JARINGAN APLIKASI(SIJA)',
            'deskripsi' => '<p>Sistem Informatika Jaringan dan Aplikasi (SIJA) merupakan satu-satunya program keahlian 
            di SMK Negeri 1 Dlanggu Mojokerto yang menjalankan program SMK 4 tahun. 
            Program keahlian SIJA berdiri sejak tahun 2017 dengan jumlah sampai saat ini sebanyak 136 siswa
            yang dipimpin seorang kepala jurusan yaitu bapak Fiki Fahrudin Fahmi, S.Kom
            Program keahlian SIJA telah bekerjasama dengan beberapa industri berkelas internasional seperti
            Axioo, Mikrotik, Redhat.
            Pada Axioo, siswa SIJA dibekali perakitan dan troubleshooting laptop dengan standart industri 
            dan dipantau secara rutin oleh pihak axioo. Selain axioo, SIJA juga bekerjasama dengan 
            perusahaan jaringan komputer yang cukup terkenal yakni Mikrotik. SMK Negeri 1 Dlanggu Mojokerto telah 
            resmi menjadi Mikrotik Academy dibawah bimbingan bapak Ziad Sobri selaku salah satu 
            Mikrotik Academy Coordinator di Indonesia. Dengan bergabung menjadi Mikrotik Academy, SMK Negeri 1 Dlanggu Mojokerto
            dapat membuka kelas ujian Mikrotik Certified Network Assosiate (MTCNA) untuk seluruh siswanya. 
            Selain itu, untuk mendukung skill siswa dibidang sistem administration, SMK Negeri 1 Dlanggu juga
            telah bekerjasama dengan Redhat Academy. dengan bergabungnya kita dengan Redhat Academy, para siswa
            mendapatkan akses khusus ke portal pembelajaran (modul) RHCSA. dan apabila ada siswa yang berminat mengambil sertifikasi 
            RHCSA, mereka akan mendapatkan diskon sebesar 50%. 
            Dengan kita bekerjasama dengan beberapa industri diharapkan ketika siswa SIJA keluar dari SMK Negeri 1 Dlanggu Mojokerto
            memiliki kompetensi yang dapat diserap oleh industri.
            
            </p>',
        ]);
        DB::table('jurusans')->insert([
            'foto' => 'rpl.png',
            'jurusan' => 'REKAYASA PERANGKAT LUNAK(RPL)',
            'deskripsi' => '<p>Rekayasa perangkat lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas.

            IEEE Computer Society mendefinisikan rekayasa perangkat lunak sebagai penerapan suatu pendekatan yang sistematis, disiplin dan terkuantifikasi atas pengembangan, penggunaan dan pemeliharaan perangkat lunak, serta studi atas pendekatan-pendekatan ini, yaitu penerapan pendekatan engineering atas perangkat lunak.
            
            Rekayasa perangkat lunak adalah pengubahan perangkat lunak itu sendiri guna mengembangkan, memelihara, dan membangun kembali dengan menggunakan prinsip reakayasa untuk menghasilkan perangkat lunak yang dapat bekerja lebih efisien dan efektif untuk pengguna.
            
            kriteria yang dapat digunakan sebagai acuan dalam merekayasa perangkat lunak:
            
            Dapat terus dirawat dan dipelihara (maintainability)
            Dapat mengikuti perkembangan teknologi (dependability)
            Dapat mengikuti keinginan pengguna (robust)
            Efektif dan efisien dalam menggunakan energi dan penggunaannya
            Dapat memenuhi kebutuhan yang diinginkan (usability)
            Sejarah
            
            Istilah software engineering, pertama kali digunakan pada akhir tahun 1950-an dan sekitar awal 1960-an. Pada tahun 1968, NATO menyelenggarakan konferensi tentang software engineering di Jerman dan kemudian dilanjutkan pada tahun 1969. Meski penggunaan kata software engineering masukan konferensi tersebut menimbulkan debat tajam tentang aspek engineering dari pengembangan perangkat lunak, banyak pihak yang menganggap konferensi tersebutlah yang menjadi awal tumbuhnya profesi rekayasa perangkat lunak.
            
            Rekayasa Perangkat Lunak Di indonesia dijadikan disiplin ilmu yang dipelajari mulai tingkat Sekolah Menengah Kejuruan sampai tingkatan Perguruan Tinggi. Di tingkat SMK, jurusan ini sudah memiliki kurikulum materi pelajaran sendiri yang sudah ditentukan oleh Dinas Pendidikan. Rekayasa Perangkat Lunak Di tingkat SMK biasanya mempelajari materi materi seperti Bahasa Pemrograman, Desain Web, Pengetahuan tetang Undang Undang HAKI dan ITE, dan sebagainya, tergantung dari sekolah dan kurikulum tiap tahunnya.
            
            Subdisiplin
            
            Kualitas perangkat lunak (software quality)
            Teknik kebutuhan perangkat lunak (requirements engineering)
            Manajemen proyek perangkat lunak (project management)
            Pengujian perangkat lunak (software testing)
            Metode formal (formal methods)
            Penjaminan mutu perangkat lunak (software quality assurance)
            Verifikasi perangkat lunak (software verification)
            Perangkat lunak terdistribusi (distributed software engineering)
            Manajemen konfigurasi perangkat lunak (software configuration management)
            Perawatan perangkat lunak (software maintenance)
            permodelan dan perancangan perangkat lunak (software design and modelling)
            Arsitektur perangkat lunak (software architectures)
            Arsitektur perangkat lunak (software architecturess)
            </p>',
        ]);
        DB::table('jurusans')->insert([
            'foto' => 'animasi.png',
            'jurusan' => 'ANIMASI(ANM)',
            'deskripsi' => '<p>Program studi animasi dibentuk dengan aspek kemanfaatan mengembangkan sumber daya bangsa: baik manusia, alam, budaya, seni dan karakter lokal bercirikan ke-Indonesiaan yang mendunia. Hal ini terwujud dalam peran sertanya membangun sumber daya manusia yang kompeten dalam segi keahlian dan berkarakter. Bagi institusi, program studi animasi berperan sebagai sebuah pioner pendidikan tinggi di bidang animasi yang resmi, sekaligus perwujudan pendidikan seni yang multidisipliner. Sedangkan bagi masyarakat dan bangsa, program studi animasi memiliki peran sebagai penghasil lulusan setingkat ahli madya yang handal, inovatif dan memiliki keahlian animasi sesuai dengan kompetensi dunia kerja.
            Profil lulusan Program studi Animasi dibagi menjadi dua buah keahlian kompetensi animasi, yaitu di bidang film animasi dan animasi game(animasi interaktif). Selain menghasilkan lulusan handal dan profesional di bidangnya, dari masing-masing bidang dijabarkan pada kebutuhan profesi di dunia kerja bidang animasi, yaitu sebagai seniman papan cerita(storyboard artist), pengatur/perancang kunci animasi(Animator keyframe), pembuat animasi inbetween (Animator inbetweener), seniman pembuat karakter/model dwimatra(2D artist), seniman pembuat karakter/model trimatra(3D artist), perancang tokoh/karakter(character designer), perancang tekstur animasi(texture artist), seniman animasi game(game animation artist), perancang game tingkat madya(game designer), pembuat game tingkat madya(game programmer), penulis skenario(script writer), sutradara animasi(animation director), penanggung jawab gerakan animasi 2D(2D animator), penanggung jawab gerakan animasi 3D(3D animator) dan kebutuhan lainnya. Semua bidang profesi tersebut mendasari setiap mata kuliah dan kurikulum yang diterapkan di program studi ini, sehingga dapat saling menyatu dan komprehensif mendukung bidang keahlian tersebut.
            </p>',
        ]);
        DB::table('jurusans')->insert([
            'foto' => 'tkj.png',
            'jurusan' => 'TEKNIK KOMPUTER JARINGAN(TKJ)',
            'deskripsi' => '<p>Teknik Komputer dan Jaringan merupakan ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet. Teknik komputer, dan jaringan juga membutuhkan pemahaman di bidang teknik listrik, dan ilmu komputer sehingga mampu mengembangkan, dan mengintegrasikan perangkat lunak, dan perangkat keras.

            Bidang pekerjaan yang dapat diisi oleh tamatan kompetensi keahlian teknik komputer, dan jaringan antara lain:
            
             
            
            Penyedia jasa layanan internet
            
            Mengidentifikasi kebutuhan keamanan jaringan
            Mendesain sistem keamanan jaringan
            Menginstalasi sistem keamanan jaringan
            Menginstalasi, dan administrasi server otentikasi
            Mengoperasikan sistem keamanan jaringan
            Monitoring keamanan jaringan
            Jaringan nirkabel
            
            Merancang, dan melakukan survey lapangan
            Membuat antenna
            Menginstalasi jaringan nirkabel
            Mengkonfigurasi peralatan
            Mengoperasikan jaringan nirkabel
            Administrator server
            
            Mengatur server
            Mengatur band width
            File sharing
            Memantau server
            Mengatur lalu lintas jaringan
            Integrator komputer
            
            Merakit computer
            Memperbaiki computer
            Menginstalasi sistem operasi berbasis graphical user interface (GUI), dan text-based user interface (TUI)
            Integrator VOIP
            
            Indentifikasi kebutuhan
            Merancang jaringan VOIP
            Instalasi softswitch
            Administrator Linux
            
            Melakukan instalasi sistem operasi Linux
            Melakukan perawatan sistem operasi Linux
            Melakukan virtualisasi
            Integrator, dan administrator jaringan
            
            Merancang bangun, dan menganalisa Wide Area Network
            Memasang jaringan local
            Melakukan instalasi perangkat jaringan area luas (Wide Area Network)
            Menginstalasi sistem operasi jaringan
            Menganalisa, dan memperbaiki kerusakan, kesalahan, atau kondisi tidak bekerjanya koneksi di sistem jaringan
            Merancang basis data web untuk content server
            Instalasi web server
            Instalasi basis data server
            Instalasi server jaringan
            10. Instalasi sistem manajemen konten
            
            11. Instalasi, dan integrasi perangkat lunak kolaborasi
            
            Administrator web
            
            Konfigurasi web
            Perawatan web
            Memantau jaringan
            Mengatur lalu lintas jaringan
            Mendiagnosis permasalahan perangkat yang tersambung jaringan area luas (Wide Area Network)
            Melakukan perbaikan, dan/atau mengatur ulang koneksi jaringan area luas (Wide Area Network)
            Memantau keamanan jaringan
            Melakukan perbaikan, dan/atau mengatur ulang koneksi jaringan
             
            </p>',
        ]);
        DB::table('jurusans')->insert([
            'foto' => 'mm.png',
            'jurusan' => 'MULTIMEDIA(MM)',
            'deskripsi' => '<p>Definisi Multimedia adalah penggunaan komputer untuk menyajikan dan menggabungkan teks, suara, gambar, animasi, audio dan video dengan alat bantu (tool) dan koneksi (link) sehingga pengguna dapat melakukan navigasi, berinteraksi, berkarya dan berkomunikasi. Multimedia sering digunakan dalam dunia informatika. Selain dari dunia informatika, multimedia juga diadopsi oleh dunia game, dan juga untuk membuat website.

            Multimedia dimanfaatkan juga dalam dunia pendidikan dan bisnis. Di dunia pendidikan, multimedia digunakan sebagai media pengajaran, baik dalam kelas maupun secara sendiri-sendiri atau otodidak. Di dunia bisnis, multimedia digunakan sebagai media profil perusahaan, profil produk, bahkan sebagai media kios informasi dan pelatihan dalam sistem e-learning.
            
            Hingga saat ini, Multimedia masih merupakan salah satu Kompetensi Keahlian di SMK yang paling banyak diminati karena mempelajari hal-hal yang sesuai dengan perkembangan teknologi terkini. Hal ini dikarenakan Kompetensi Keahlian Multimedia mempunyai ruang lingkup pekerjaan dan profesi yang luas, bahkan para siswa lulusan Kompetensi Keahlian Multimedia juga memiliki peluang untuk membuka usaha atau berwirausaha sendiri dalam bidang multimedia.
            
            Kompetensi keahlian Multimedia SMKN 1 Dlanggu mengajak siswa mempelajari berbagai jenis kompetensi di bidang multimedia, meliputi kelompok besar desain grafis, audio video, animasi, dan multimedia interaktif.
            
            Visi Kompetensi Keahlian Multimedia SMKN 1 Dlanggu
            
            Menciptakan Sumber Daya Manusia unggul di bidang Multimedia yang diakui/tersertifikasi juga mampu bersaing di dunia kerja, dan bertaqwa kepada Tuhan Yang Maha Esa serta dapat berwirausaha.
            
            Misi Kompetensi Keahlian Multimedia SMKN 1 Dlanggu
            
            Menghasilkan lulusan yang mempunyai skill/keterampilan yang diakui dan tersertifikasi dalam bidang desain grafis, desain grafis percetakan, pengolahan audio video, dan animasi;
            Menghasilkan lulusan yang mempunyai skill/keterampilan yang diakui dan tersertifikasi dalam bidang Multimedia;
            Menghasilkan lulusan yang tidak hanya mumpuni dalam skill/ keterampilan di bidang IPTEK akan tetapi juga mempunyai IMTAQ yang bisa dipertanggung jawabkan;
            Menghasilkan lulusan yang mempunyai kemampuan berwirausaha.
            Menghasilkan lulusan yang mampu bersaing di jenjang pendidikan tinggi.
            Materi pelajaran peminatan yang diajarkan pada kompetensi Multimedia yaitu:
            
            1. Simulasi dan Komunikasi Digital
            
            2. Komputer dan Jaringan Dasar
            
            3. Pemrograman Dasar
            
            4. Dasar Desain Grafis
            
            5. Desain Grafis Percetakan
            
            6. Desain Media Interaktif
            
            7. Teknik Animasi 2D dan 3D
            
            8. Teknik Pengolahan Audio dan Video
            
            9. Produk Kreatif dan Kewirausahaan
            
            Pekerjaan-pekerjaan dibidang multimedia memang bisa dibilang sesuatu yang baru, yang berkembang dan muncul setelah semakin berkembangnya teknologi informasi seperti adanya internet, komputer, kamera, gadget, dan berbagai perangkat teknologi komunikasi lainnya. Untuk bisa menemukan pelung usaha bidang multimedia sebenarnya cukup mudah, yakni dengan cara merespons perkembangan teknologi informasi yang ada saat ini, yang sebelumnya hanya sebagai penikmat bagaimana bisa menjadi pembuat, dari pembeli bisa menjadi penjual, dari sekedar penonton menjadi sesuatu yang ditonton, dan lain sebagainya. Pada prinsipnya adalah bagaimana merubah peran kita, yang sebelumnya hanya sebagai pelaku konsumtif dirubah menjadi sesuatu yang produktif di bidang mulltmedia. Sesuai dengan namanya Multimedia, seseorang yang menekuni bidang ini justru biasanya memiliki banyak peluang karena dapat bekerja dengan banyak media. Tinggal pilih salah satu media yang dikuasai, kemudian dikembangkan dan dimaksimalkan sehingga menjadi sebuah keahlian yang bernilai tinggi. Adapaun peluang usaha bidang multimedia yang bisa dipilih dan dikembangkan misalnya:
            
            Ilustrator
            Komikus
            Animator
            Desainer
            Praktisi Periklanan
            Industri Kreatif
            Desainer Grafis
            Script Writer
            Film Maker
            MoU dengan DU/DI:
            
            Institut Teknologi Sepuluh Nopember (ITS)
            Balai Pengembangan Media Televisi Pendidikan dan Kebudayaan (BPMTPK)
            Balai Pengembangan Multimedia Pendidikan dan Kebudayaan (BPMPK)
            CV Zona Grafika (Rumah Besar Kemasan)
            CV Kalimaya Spekta
            CV Wahana Karya
            Banyu Advertising
            RKB Pertamina
            </p>',
        ]);
        DB::table('jurusans')->insert([
            'foto' => 'aph.png',
            'jurusan' => 'AKOMODASI PERHOTELAN(APH)',
            'deskripsi' => '<p>Tujuan Kompetensi Keahlian Akomodasi Perhotelan

            Secara khusus tujuan Kompetensi Keahlian Akomodasi Perhotelan adalah membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten:
            
            Melaksanakan pekerjaan di lingkup Front Office sebagai Reception, eservation, Telephone Operator, dan Porter
            Melaksanakan pekerjaan di lingkup Housekeeping sebagai Public Area Attendant, Room Attendant, Order Taker, Linen & Uniform Attendant dan Laundry Attendant.
            Profil Lulusan Kompetensi keahlian Akomodasi Perhotelan. Membekali peserta didik dengan pengetahuan, keterampilan dan sikap agar kompeten:

Melaksanakan pekerjaan di lingkup Front Office sebagai Reception, Reservation, Telephone Operator, dan Porter;
Melaksanakan pekerjaan di lingkup Housekeeping sebagai Public Area Attendant, Room Attendant, Order Taker, Linen & Uniform Attendant dan Laundry Attendant.
 

Lapangan Pekerjaan yang dapat diisi oleh lulusan Kompetensi keahlian Akomodasi Perhotelan antara lain :

Pekerjaan di Lingkup Housekeeping Hotel
Pekerjaan di Lingkup Front Office Hotel
Usaha Pelayanan Laundry
Usaha Pelayanan Cleaning Service
Telepon Operator / Receptionist di kantor
Publict Relations
 

Fasilitas

Fasilitas yang harus tersedia dalam Kompetensi keahlian Akomodasi Perhotelan adalah Hotel Praktek sebagai Hotel Training, Ruangan Belajar yang mengacu kepada Teaching factory, Hotel real sebagai upaya pengembangan usaha dan tempat praktik yang nyata.
            </p>',
        ]);
        DB::table('jurusans')->insert([
            'foto' => 'tb.png',
            'jurusan' => 'TATA BOGA(TB)',
            'deskripsi' => '<p>Tata boga adalah suatu disiplin ilmu terkait dengan seni dalam menyiapkan, memasak, dan menghidangkan makanan siap saji. Di Indonesia, disiplin ilmu ini dapat dipelajari di Sekolah Menengah Kejuruan (SMK) atau di tingkat sekolah tinggi terkait Industri pariwisata dan industri perhotelan. Seorang yang memiliki keahlian dalam tata boga dinamakan sebagai koki, juru masak atau chef, dimana orang ini diharuskan untuk memiliki pengetahuan dalam ilmu pangan, nutrisi, dan diet serta memiliki kreativitas dalam menyiapkan hidangan makanan yang menarik untuk dilihat. Ilmu tata boga sangat terkait dengan industri pariwisata dan perhotelan dimana kebanyakan para juru masak bekerja di rumah makan, hotel, atau taman hiburan
            Pekerjaan Menjanjikan untuk Lulusan SMK Jurusan Tata Boga

Bukan rahasia jika industri kuliner tidak pernah mati. Oleh karena itu, jurusan tata boga tetap menjadi salah satu jurusan yang paling diminati oleh industri saat ini. Lowongan pekerjaan yang tersedia pun beragam. Berikut ini beberapa pekerjaan yang cocok untuk para lulusan SMK jurusan tata boga.

1. Asisten Koki

Menjadi asisten koki merupakan suatu pekerjaan yang sangat cocok untuk lulusan SMK tata boga. Dengan kemampuannya di bidang kuliner, lulusan SMK tata boga tentu dapat menjadi asisten koki yang baik. Bukan hanya di restaurant saja, kamu juga bisa menjadi asisten koki di hotel berbintang dengan gaji yang besar.

2. Waiters atau Pelayan Restaurant

Pekerjaan yang cocok untuk lulusan SMK jurusan tata boga selanjutnya adalah menjadi waiters atau pelayan restaurant. Sama halnya dengan asisten koki, kamu juga bisa menjadi pelayanan restaurant di sebuah hotel. Jika kamu suka dengan dunia perhotelan dan bertemu dengan orang baru, tidak ada salahnya untuk mencoba pekerjaan ini.

Umumnya pekerjaan menjadi waiters atau pelayan restaurant meliputi memberikan pelayanan pada setiap tamu yang datang, menjaga dan memelihara kebersihan area restaurant, serta menjalankan prosedur yang diterapkan oleh restaurant tersebut. Selain mendapatkan gaji bulanan, kamu juga bisa mendapatkan service charge dan tips jika bekerja menjadi waiters.

3. Juru Masak Rumah Sakit

Jika kamu tertarik untuk bekerja di rumah sakit, tidak ada salahnya untuk mencoba pekerjaan yang satu ini. Sama halnya dengan juru masak di restaurant, juru masak di rumah sakit juga bertugas menyiapkan hidangan. Hal yang membuatnya berbeda tentu menu yang dihidangkan. Karena diberikan pada pasien rumah sakit, menu yang diberikan tentu berbeda dengan restaurant.

Umumnya pekerjaan yang cocok untuk lulusan SMK jurusan tata boga ini juga meliputi perencanaan kerja, agar sesuai dengan menu dan jadwal pembagian makanan ke pasien serta mengkonsultasikan bahan makanan sebelum diolah. Selain itu, kamu juga biasanya bertanggung jawab dalam pengangkutan sampah domestik ke TPS terdekat.

4. Baker

Selanjutnya, kamu juga bisa menjadi seorang baker atau bekerja di sebuah toko roti atau bakery. Jika kamu tertarik dengan dunia bakery dibanding memasak menu-menu makanan di restaurant, menjadi seorang baker atau staff di sebuah toko roti bisa menjadi pilihan yang tepat. Gajinya pun tidak kalah dengan beberapa pekerjaan di atas.

5. Staff Catering

Bekerja menjadi staff catering bisa menjadi pilihan lain sebagai lulusan SMK jurusan tata boga. Saat ini ada banyak perusahaan yang membutuhkan staff catering baik untuk memenuhi kebutuhan pasar atau untuk memenuhi kebutuhan di lingkungan perusahaan itu sendiri. Pendapatan yang diperoleh pun tidak kalah dengan pekerjaan lainnya.


            </p>',
        ]);
    }
}
