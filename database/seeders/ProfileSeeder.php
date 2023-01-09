<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile=Profile::create([
            'nama'=>'SMK N 1 DLANGGU ',
            'status'=>'NEGERI',
            'NPNS'=>'20502729 ',
            'akreditasi'=>'A',
            'NSS'=>'341050313310 ',
            'alamat'=>'Jl. Jend A.Yani No.1 Ds. Pohkecik - Dlanggu ',
            'kode'=>'61371 ',
            'no'=>'0321513093 ',
            'email'=>'info@smkndlanggu.sch.id',
        ]);
    }
}
