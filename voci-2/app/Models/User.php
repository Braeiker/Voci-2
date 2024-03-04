<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Modello per rappresentare un utente.
 *
 * @property int $id Identificatore univoco dell'utente.
 * @property string $name Nome dell'utente.
 * @property string $email Indirizzo email dell'utente.
 * @property \Illuminate\Support\Carbon $email_verified_at Data e ora della verifica dell'email dell'utente.
 * @property string $password Password dell'utente.
 * @property string|null $remember_token Token di ricordo dell'utente.
 * @property \Illuminate\Support\Carbon $created_at Data e ora della creazione dell'utente.
 * @property \Illuminate\Support\Carbon $updated_at Data e ora dell'ultima modifica dell'utente.
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Attributi che possono essere assegnati in massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Attributi che devono essere nascosti nella serializzazione.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attributi che devono essere castati.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
