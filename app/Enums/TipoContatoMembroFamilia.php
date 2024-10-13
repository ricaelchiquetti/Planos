<?php

namespace App\Enums;

enum TipoContatoMembroFamilia: string
{
    case TELEFONE = 1;
    case EMAIL    = 2;
    case ENDERECO = 3;
    case WHATSAPP = 4;
    case OUTRO    = 5;

    public static function description(): string
    {
        return match ($this) {
            self::TELEFONE => 'Telefone',
            self::EMAIL => 'E-mail',
            self::ENDERECO => 'Endereço',
            self::WHATSAPP => 'WhatsApp',
            self::OUTRO => 'Outro',
        };
    }
}
