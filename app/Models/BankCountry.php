<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankCountry extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_id',
        'country_id'
    ];

    public function bank()
    {
        return $this->hasMany(Country::class);
    }

    public function country()
    {
        return $this->hasMany(Bank::class);
    }
}
