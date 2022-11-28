<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guru;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'fotoguru' => 'ladi.png',
            'nama' => 'Drs. Ladi.M.M',
            'nip' => '19650915 198903 1 013',
            'tmplahir' => 'Pasuruan	',
            'tgllahir' => '24-Jan-1971',
            'status' => 'PNS',
            'jabatan' => 'KEPALA SEKOLAH'
        ]);
        DB::table('gurus')->insert([
            'fotoguru' => 'huddy.jpg',
            'nama' => 'Huddy Iswanto, S.Kom',
            'nip' => '19650915 198903 1 012',
            'tmplahir' => 'Mojokerto	',
            'tgllahir' => '24-Jan-1971',
            'status' => 'PNS',
            'jabatan' => 'WaKa Hummas'
        ]);
        DB::table('gurus')->insert([
            'fotoguru' => 'frans.jpg',
            'nama' => 'Frans Umila, S.Pd',
            'nip' => '19650915 198903 1 014',
            'tmplahir' => 'Mojokerto	',
            'tgllahir' => '24-Jan-1971',
            'status' => 'PNS',
            'jabatan' => 'WaKa Sarana Prasarana'
        ]);
        DB::table('gurus')->insert([
            'fotoguru' => 'nizar.jpg',
            'nama' => 'Nizar Agus D, S.Kom,M.Pd',
            'nip' => '19650915 198903 1 015',
            'tmplahir' => 'Mojokerto	',
            'tgllahir' => '24-Jan-1971',
            'status' => 'PNS',
            'jabatan' => 'WaKa Kurikulum'
        ]);
        DB::table('gurus')->insert([
            'fotoguru' => 'samsul.jpg',
            'nama' => 'Samsul Hadi S.pd',
            'nip' => '19650915 198903 1 015',
            'tmplahir' => 'Mojokerto	',
            'tgllahir' => '24-Jan-1971',
            'status' => 'PNS',
            'jabatan' => 'WaKa Kurikulum'
        ]);
        
    }
}
