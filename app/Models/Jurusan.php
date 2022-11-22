<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusans';
    protected $fillable = [
        'id','foto','jurusan','deskripsi'
    ];
    protected $guarded = [];
    use HasFactory;
}