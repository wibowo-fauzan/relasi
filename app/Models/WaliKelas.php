<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliKelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'jenis_kelamin',
        'tanggal_lahir',
    ];
}
