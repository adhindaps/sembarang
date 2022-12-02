<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $admin=User::create([
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345678'),
                'remember_token'=>Str::random(60),
        ]);
    }
}
