<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuans';
    protected $fillable = [
        'nama',
        'email',
        'instansi',
        'jenis_kelamin',
        'jurusan',
        'semester',
        'alamat',
        'no_hp',
        'cv_datadiri',
        'surat_pengantar'
    ];

}
