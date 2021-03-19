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

    public function country()
    {
        return $this->belgonsToMany(Country::class);
    }

    public function franchise()
    {
        return $this->hasMany(Franchise::class);
    }
}
