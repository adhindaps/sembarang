<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $profile=Profile::create([
            'nama'=>'SMK DLANGGU',
            'status'=>'NEGERI',
            'NPNS'=>'123',
            'akreditasi'=>'A',
            'NSS'=>'123',
            'alamat'=>'dlanggu',
            'kode'=>'3671',
            'no'=>'087465353',
            'email'=>'smkdlanggu@gmail.com',
        ]);
    }
}
