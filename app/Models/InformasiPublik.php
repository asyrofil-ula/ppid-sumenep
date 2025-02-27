<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiPublik extends Model
{

    protected $table = 'informasi_publik';
    protected $fillable = [
        'nama_informasi',
        'post_by',
        'icon',
        'is_active',
        'nama_dokumen',
        'path_dokumen',
        'url'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function klasifikasiInformasi()
    {
        return $this->belongsTo(KlasifikasiInformasi::class);
    }

    public function jenisInformasi()
    {
        return $this->belongsTo(JenisInformasi::class);
    }

    public function detailJenisInformasi()
    {
        return $this->belongsTo(DetailJenisInformasi::class);
    }

    public function informasiPublikDetails()
    {
        return $this->hasMany(InformasiPublikDetail::class);
    }
}
