<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileInformasiPublik extends Model
{
    protected $table = 'file_informasi_publiks';

    protected $fillable = [
        'informasi_publik_detail_id',
        'deskripsi',
        'file',
        'is_active',
        'post_by',
    ];

    protected $casts = [
        'file' => 'array', // Laravel otomatis mengubah JSON ke array
    ];
    
    public function informasiPublikDetail()
{
    return $this->belongsTo(InformasiPublikDetail::class);
}

}
