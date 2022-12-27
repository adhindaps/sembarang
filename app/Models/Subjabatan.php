<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjabatan extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function guru(){
        return $this->hasMany(Guru::class);
    }
}
