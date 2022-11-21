<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $table = 'extras';
    protected $fillable = [
        'id','fotoex','extra','deskripsi'
    ];
    protected $guarded = [];
    use HasFactory;
}
