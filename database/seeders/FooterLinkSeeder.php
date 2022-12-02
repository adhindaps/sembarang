<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FooterLink;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FooterLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_links')->insert([
            'halaman' => 'PPDB JATIM',
            'Link' => 'https://ppdbjatim.net/',
        ]);
        DB::table('footer_links')->insert([
            'halaman' => 'PSMK Kemdikbud',
            'Link' => 'http://psmk.kemdikbud.go.id',
        ]);
        DB::table('footer_links')->insert([
            'halaman' => 'Portal Subdit Peserta Didik',
            'Link' => 'http://pesertadidik.ditpsmk.net',
        ]);
        DB::table('footer_links')->insert([
            'halaman' => 'PIP SMK',
            'Link' => 'http://pipsmk.ditpsmk.net',
        ]);
        DB::table('footer_links')->insert([
            'halaman' => 'Dapodikdasmen',
            'Link' => 'http://dapo.dikdasmen.kemdikbud.go.id',
        ]);
        DB::table('footer_links')->insert([
            'halaman' => 'Info Data PTK',
            'Link' => 'http://infoptk.datadapodik.com/',
        ]);
    }
}
