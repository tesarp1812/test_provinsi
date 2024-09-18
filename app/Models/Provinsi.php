<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi'; 
    protected $fillable = [
        'nama_prop',
        'jumlah_penduduk',
    ];

    public function ktps()
    {
        return $this->hasMany(Ktp::class, 'Id_prop');
    }
}
