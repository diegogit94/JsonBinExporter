<?php

namespace App\Constants;

interface FranchiseConstants
{
    public const MASTERCARD = 'mastercard';
    public const TRANSERVERVISA = 'transerver';
    public const DINERS = 'diners';

    public const FRANCHISES = [
        self::MASTERCARD,
        self::TRANSERVERVISA,
        self::DINERS,
    ];
}
