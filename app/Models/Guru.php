<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    
    use HasFactory;

    protected $table = 'gurus';
    protected $fillable = [
        'fotoguru',
        'nama',
        'nip',
        'tmplahir',
        'tgllahir',
        'status_id',
        'jabatan_id',
        'subjabatan_id',
    ];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }
    public function subjabatan(){
        return $this->belongsTo(Subjabatan::class);
    }
    public function status(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}

