<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AerodynamicResearch extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'aerodynamic_research';

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'heading',
        'subheading',
        'description',
        'img',
        'section',
    ];

    // Tentukan kolom yang harus diubah menjadi tipe data tanggal
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}