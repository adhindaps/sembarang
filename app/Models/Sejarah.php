<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $table = 'sejarahs';
    protected $fillable = [
        'id', 'nama','deskripsi'
    ];

    protected $guarded = [];
    use HasFactory;
}
