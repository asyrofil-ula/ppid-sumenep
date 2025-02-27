<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{

    protected $table = 'galeri';
    protected $fillable = [
        'is_active',
        'title',
        'description',
        'post_by',
        'path_img'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

}
