<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Media extends Model
{
    use HasFactory;

    // Specify fillable attributes to allow mass assignment
    protected $fillable = [
        'name', 'category', 'description', 'file'
    ];

    // Define a relationship with the Post model
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
