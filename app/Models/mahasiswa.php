<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class mahasiswa extends Model
{
     protected $connection = 'mongodb';
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'jenis_kelamin',
        'prodi',
        'usia'
    ];
}
