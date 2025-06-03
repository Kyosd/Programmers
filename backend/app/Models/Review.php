<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'rating', 'comment'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
