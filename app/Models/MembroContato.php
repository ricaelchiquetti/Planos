<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MembroContato
 *
 * @property int $id
 * @property int $membro_id
 * @property int $tipo
 * @property string $valor
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class MembroContato extends Model
{
    use HasFactory;

    protected $fillable = [
        'membro_id',
        'tipo',
        'valor',
    ];

    /**
     * Define o relacionamento com o modelo MembroFamilia.
     *
     * @return BelongsTo
     */
    public function membro(): BelongsTo
    {
        return $this->belongsTo(MembroFamilia::class, 'membro_id');
    }
}
