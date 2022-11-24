<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'Profiles';
    protected $fillable = [
        'id', 'nama', 'status', 'NPNS', 'akreditasi', 'NSS', 'alamat', 'kode', 'no', 'email'
    ];
    protected $guarded = [];
    use HasFactory;
}
