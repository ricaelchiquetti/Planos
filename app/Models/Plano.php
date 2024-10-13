<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Plano
 *
 * @property int $id
 * @property int $cliente_id
 * @property string $nome
 * @property int|null $idade
 * @property int|null $total_membros
 * @property float $valor
 * @property int|null $carencia
 * @property string|null $observacao
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Plano extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'nome',
        'idade',
        'total_membros',
        'valor',
        'carencia',
        'observacao',
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
}
