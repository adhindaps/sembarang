<?php

namespace App\Models;

use App\Models\jurusan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kajur extends Model
{
    protected $primaryKey = "id";
    protected $guarded = [];
    use HasFactory;
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class,'id_jurusan','id');
    }
}
