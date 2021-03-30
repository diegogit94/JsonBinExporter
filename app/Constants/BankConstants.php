<?php

namespace App\Constants;

interface BankConstants
{
    public const BANCOLOMBIA = 'bancolombia';
    public const BCR = 'bcr';
    public const GUAYAQUIL = 'guayaquil';

    public const BANKS = [
        self::BANCOLOMBIA,
        self::BCR,
        self::GUAYAQUIL,
    ];
}
