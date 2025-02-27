<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements FilamentUser
{

    use HasFactory, Notifiable, SoftDeletes; 
    protected $fillable = [
        'name',
        'email',
        'password',
        'perangkat_daerah',
        'is_active',
        'role',
        'operator_ppid',
        'no_whatsapp',
        'path_surat_tugas',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === 'admin';
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Menggunakan SoftDeletes untuk menambahkan fitur soft delete.
     */
    protected $dates = ['deleted_at']; // Pastikan kolom deleted_at di cast sebagai tanggal
}
