<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Media;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    // Specify guarded attributes to allow mass assignment
    protected $guarded = [];

    // Define a scope for filtering posts based on specified conditions
    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query
                ->select('posts.*', 'authors.name', 'authors.surname', 'media.category', 'media.description')
                ->join('authors', 'posts.author_id', '=', 'authors.id')
                ->join('media', 'posts.media_id', '=', 'media.id')
                ->where('posts.post_name', 'like', '%' . $search . '%')
                ->orWhere('authors.name', 'like', '%' . $search . '%')
                ->orWhere('authors.surname', 'like', '%' . $search . '%')
                ->orWhere('media.category', 'like', '%' . $search . '%')
                ->orWhere('media.description', 'like', '%' . $search . '%');
        );
    }

    // Define a relationship with the Author model
    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

    // Define a relationship with the Media model
    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    // Specify fillable attributes to allow mass assignment
    protected $fillable = [
        'post_name', 'author_id', 'media_id'
    ];
}
