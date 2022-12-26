<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = "master_kecamatan";

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, 'id_kec_ktp');
    }

    public function keluarga()
    {
        return $this->hasMany(Penduduk::class, 'id_kec_ktp')->distinct('nokk');
    }
}