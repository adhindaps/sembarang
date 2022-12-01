<?php

namespace App\Models;

use App\Models\kategoriblog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $primaryKey = "id";
    protected $guarded = [];
    use HasFactory;
    public function kategori()
    {
        return $this->belongsTo(Kategoriblog::class,'id_kategori','id');
    }
}
