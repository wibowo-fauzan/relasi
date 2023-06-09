<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kelas_id',
        'nama', 
        'nisn', 
        'tempat_lahir', 
        'tanggal_lahir'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
