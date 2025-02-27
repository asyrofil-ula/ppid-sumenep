<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AplikasiLayanan extends Model
{

    protected $table = 'aplikasi_layanan';
    protected $fillable = [
        'nama_aplikasi',
        'post_by',
        'icon',
        'is_active',
        'description',
        'path_dokumen',
        'url',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
