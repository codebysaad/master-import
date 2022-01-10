<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nmpeg',
        'npwp',
        'nmrek',
        'nm_bank',
        'rekening',
        'bersih',
        'sandi',
        'kdbankspan',
        'kdswift',
        'kdpos',
        'kdnegara',
        'kdkppn',
        'tipe_supplier',
        'kota',
        'provinsi',
        'email',
        'telepon',
        'kdiban',
        'alamat2',
        'kdnab',
        'kdlokasi2',
        'kdkabkota2',
        'nrs',
        'nip',
        'nama_supplier',
    ];
}
