<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AerodynamicResearch extends Model
{
    use HasFactory;

    protected $table = 'aerodynamic_research';

    protected $fillable = [
        'heading',
        'subheading',
        'description',
        'img',
        'section',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}