<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama',
        'guru_bk',
        'jadwal_pertemuan_murid',
        'jadwal_pertemuan_guru',
        'tema_masalah',
        'solusi_masalah',
        'keterangan_pertemuan',
    ];
}