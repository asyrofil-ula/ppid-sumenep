<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailJenisInformasi extends Model
{

    protected $table = 'detail_jenis_informasi';
    protected $fillable = ['description'];

    public function informasiPubliks()
    {
        return $this->hasMany(InformasiPublik::class);
    }

    public function infografis()
    {
        return $this->hasMany(Infografis::class);
    }
}
