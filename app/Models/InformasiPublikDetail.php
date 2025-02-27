<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\InformasiPublikLampiran;

class InformasiPublikDetail extends Model
{
    protected $table = 'informasi_publik_details';

    protected $fillable = [
        'informasi_publik_id',
        'description',
        'is_active',
    ];

    public function informasiPublik()
    {
        return $this->belongsTo(InformasiPublik::class);
    }

    public function lampiran()
    {
        return $this->hasMany(FileInformasiPublik::class);
    }    

}
