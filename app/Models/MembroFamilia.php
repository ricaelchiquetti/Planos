<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MembroFamilia
 *
 * @property int $id
 * @property string $nome
 * @property \Illuminate\Support\Carbon $data_nascimento
 * @property string $cpf
 * @property bool $principal
 * @property int $familia_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class MembroFamilia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
        'principal',
        'familia_id',
    ];

    /**
     * Define o relacionamento com o modelo Familia.
     *
     * @return BelongsTo
     */
    public function familia(): BelongsTo
    {
        return $this->belongsTo(Familia::class, 'familia_id');
    }

    /**
     * Define o relacionamento inverso com o modelo MembroContato.
     *
     * @return HasMany
     */
    public function contatos(): HasMany
    {
        return $this->hasMany(MembroContato::class, 'membro_id');
    }
}
