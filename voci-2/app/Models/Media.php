<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

/**
 * Modello per rappresentare un elemento multimediale.
 *
 * @property int $id Identificatore univoco dell'elemento multimediale.
 * @property string $name Nome dell'elemento multimediale.
 * @property string $category Categoria dell'elemento multimediale.
 * @property string $description Descrizione dell'elemento multimediale.
 * @property string $file Nome del file dell'elemento multimediale.
 * @property \Illuminate\Database\Eloquent\Collection $posts Elenco dei post associati all'elemento multimediale.
 * @property \Illuminate\Support\Carbon $created_at Data e ora della creazione dell'elemento multimediale.
 * @property \Illuminate\Support\Carbon $updated_at Data e ora dell'ultima modifica dell'elemento multimediale.
 */
class Media extends Model
{
    use HasFactory;

    /**
     * Attributi che possono essere assegnati in massa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name', 'category', 'description', 'file'
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
