<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelayanan_informasi extends Model
{
    protected $table = 'pelayanan_informasi';

    protected $fillable = [
        'title',
        'content',
    ];
}
