<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'judul' => 'Video Profile SMK NEGERI 1 DLANGGU',
            'link' => 'https://www.youtube.com/watch?v=4C-XHxX7l4A',
            'foto' => 'g.jpeg',
        ]);
    }
}
