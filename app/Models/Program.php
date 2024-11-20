<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_program',
        'lokasi',
        'status',
        'deskripsi',
        'tujuan',
        'durasi',
        'mitra',
        'image',
    ];
}
