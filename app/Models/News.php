<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * Fillable fields for mass assignment.
     */
    protected $fillable = [
        'title',
        'content',
        'image',
        'author_id',
    ];

    /**
     * Relasi ke model Author.
     * Setiap berita memiliki satu author.
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
