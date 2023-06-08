<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruBK extends Model
{
    use HasFactory;

    protected $table = 'guru_bk';

    protected $fillable = [
        'nama', 
        'tanggal_lahir', 
        'nip', 
        'jenis_kelamin'
    ];
}
