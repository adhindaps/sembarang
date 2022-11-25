<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sudutecho extends Model
{
    protected $table = 'Profiles';
    protected $fillable = [
        'id', 'foto', 'judul', 'deskripsi'
    ];
    protected $guarded = [];
    use HasFactory;
}
