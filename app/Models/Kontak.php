<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'telpon',
        'alamat',
        'email',
        'url_instagram',
        'url_facebook',
        'url_tiktok',
        'url_youtube',
    ];
}
