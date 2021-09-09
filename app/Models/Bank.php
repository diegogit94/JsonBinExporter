<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function countries()
    {
        return $this->belgonsToMany(Country::class, 'bank_countries');
    }

    public function franchises()
    {
        return $this->hasMany(Franchise::class, 'bank_franchises');
    }
}
