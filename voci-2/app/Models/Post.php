<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Media;

/**
 * Modello per rappresentare un post.
 *
 * @property int $id Identificatore univoco del post.
 * @property string $post_name Nome del post.
 * @property int $author_id Identificatore dell'autrice associata al post.
 * @property int $media_id Identificatore dell'elemento multimediale associato al post.
 * @property \App\Models\Author $authors Autrice associata al post.
 * @property \App\Models\Media $media Elemento multimediale associato al post.
 * @property \Illuminate\Support\Carbon $created_at Data e ora della creazione del post.
 * @property \Illuminate\Support\Carbon $updated_at Data e ora dell'ultima modifica del post.
 */
class Post extends Model
{
    use HasFactory;

    /**
     * Attributi che non possono essere assegnati in massa.
     *
     * @var array<string>
     */
    protected $guarded = [];

    /**
     * Definisce la query scope per filtrare i post.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
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
                ->orWhere('media.description', 'like', '%' . $search . '%')
        );
    }

    /**
     * Definisce la relazione molti a uno con l'autrice.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function authors()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    /**
     * Definisce la relazione molti a uno con l'elemento multimediale.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    /**
     * Attributi che possono essere assegnati in massa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'post_name', 'author_id', 'media_id'
    ];
}
