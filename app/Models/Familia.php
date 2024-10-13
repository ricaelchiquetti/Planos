<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Familia
 *
 * @property int $id
 * @property int $cliente_id
 * @property string $nome
 * @property string $endereco
 * @property \Illuminate\Support\Carbon $inicio
 * @property \Illuminate\Support\Carbon $dia_vencimento
 * @property bool $ativo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Familia extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'nome',
        'endereco',
        'inicio',
        'dia_vencimento',
        'ativo',
    ];

    /**
     * Define o relacionamento com o modelo Cliente.
     *
     * @return BelongsTo
     */
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    /**
     * Define o relacionamento com o modelo MembroFamilia.
     *
     * @return HasMany
     */
    public function membros(): HasMany
    {
        return $this->hasMany(MembroFamilia::class, 'familia_id');
    }
}
