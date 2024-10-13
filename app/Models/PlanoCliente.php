<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoCliente extends Model
{
    use HasFactory;

    protected $table = 'planos_clientes';

    protected $fillable = [
        'nome',
        'valor',
    ];
}
