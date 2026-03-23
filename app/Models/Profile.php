<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'nickname',
        'headline',
        'biografi_pendek',
        'biografi_lengkap',
        'foto_profil',
        'lokasi',
        'resume_link',
        'is_available',
    ];

    protected $casts = [
        'is_available' => 'boolean',
    ];
}
