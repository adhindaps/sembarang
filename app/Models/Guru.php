<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = [
        'id','fotoguru','nama','jabatan'
    ];
    protected $guarded = [];
    use HasFactory;
}
