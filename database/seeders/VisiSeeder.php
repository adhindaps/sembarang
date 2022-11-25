<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Visi;
use Illuminate\Database\Seeder;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visi=Visi::create([
            'nama'=>'VISI MISI',
            'deskripsi'=>'<p>Visi
            Visi dari sekolah kami yaitu “Menghasilkan tamatan yang profesional, kompetitif secara nasional dan internasional, beriman dn bertaqwa serta cinta tanah air dan mampu berwirausaha”.
            
            Misi
            1.Melaksanakan kurikulum berstandar kompetensi untuk menyiapkan tamatan yang siap pakai di dunia kerja.
            2.Meningkatkan professional dan akuntabilitas SMKN 1 Dlanggu sebagai pusat pendidikan yang berstandar nasional.
            3.Meningkatkan profesionalisme tenaga pendidik yang mempunyai kompetensi sesuai dengan bidang keahlian
            4.Meningkatkan kualitas tamatan yang menguasai teknologi yang dilansadi iman dan taqwa./p>',
        ]);
    }
}
