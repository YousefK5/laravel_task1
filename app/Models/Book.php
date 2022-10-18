<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name', 'description', 'author_id', 'image'];
    protected $hidden = [];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    use HasFactory, SoftDeletes;
}
