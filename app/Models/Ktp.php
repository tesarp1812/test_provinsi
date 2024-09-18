<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;

    protected $table = 'ktp'; 
    protected $fillable = [
        'Id_prop',
        'nik',
        'nama',
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'Id_prop');
    }
}
