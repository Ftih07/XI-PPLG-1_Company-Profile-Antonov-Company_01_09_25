<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    /**
     * Fillable fields for mass assignment.
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * Relasi ke model News.
     * Satu author dapat memiliki banyak berita.
     */
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
