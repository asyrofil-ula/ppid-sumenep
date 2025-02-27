<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisInformasi extends Model
{

    protected $table = 'jenis_informasi';
    protected $fillable = ['jenis_informasi'];

    public function informasiPubliks()
    {
        return $this->hasMany(InformasiPublik::class);
    }

    public function infografis()
    {
        return $this->hasMany(Infografis::class);
    }
}
