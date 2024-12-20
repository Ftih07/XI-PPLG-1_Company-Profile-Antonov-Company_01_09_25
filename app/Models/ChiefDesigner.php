<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiefDesigner extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'period',
        'image',
        'description',
    ];
}
