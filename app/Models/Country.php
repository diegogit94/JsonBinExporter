<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function bank()
    {
        return $this->hasMany(Bank::class);
    }

    public function bankCountry()
    {
        return $this->hasMany(BankCountry::class);
    }
}
