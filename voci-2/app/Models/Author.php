<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Author extends Model
{
    use HasFactory;

    // Specify fillable attributes to allow mass assignment
    protected $fillable = [
        'name', 'surname'
    ];

    // Define a relationship with the Post model
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
