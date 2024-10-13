<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string|null $telefone
 * @property string|null $endereco
 * @property string $cnpj
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
        'cnpj',
        'plano_id',
    ];

    /**
     * Define o relacionamento com o modelo PlanoCliente.
     *
     * @return BelongsTo
     */
    public function planoCliente(): BelongsTo
    {
        return $this->belongsTo(PlanoCliente::class, 'plano_id');
    }

    /**
     * Define o relacionamento com o modelo Plano.
     *
     * @return HasMany
     */
    public function planos(): HasMany
    {
        return $this->hasMany(Plano::class, 'cliente_id');
    }

    /**
     * Define o relacionamento com o modelo Familia.
     *
     * @return HasMany
     */
    public function familias(): HasMany
    {
        return $this->hasMany(Familia::class, 'cliente_id');
    }
}
