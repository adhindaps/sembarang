<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visi extends Model
{
    protected $table = 'visis';
    protected $fillable = [
        'id','nama','deskripsi'
    ];
    protected $guarded = [];
    use HasFactory;
}
