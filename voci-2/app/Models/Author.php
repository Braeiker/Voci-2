<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

/**
 * Modello per rappresentare un'autrice.
 *
 * @property int $id Identificatore univoco dell'autrice.
 * @property string $name Nome dell'autrice.
 * @property string $surname Cognome dell'autrice.
 * @property \Illuminate\Database\Eloquent\Collection $posts Elenco dei post scritti dall'autrice.
 * @property \Illuminate\Support\Carbon $created_at Data e ora della creazione dell'autrice.
 * @property \Illuminate\Support\Carbon $updated_at Data e ora dell'ultima modifica dell'autrice.
 */
class Author extends Model
{
    use HasFactory;

    /**
     * Attributi che possono essere assegnati in massa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name', 'surname'
    ];

    /**
     * Definisce la relazione uno a molti con i post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
