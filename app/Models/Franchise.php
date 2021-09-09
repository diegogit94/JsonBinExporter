<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function banks()
    {
        return $this->belgonsToMany(Bank::class, 'bank_franchises');
    }

    public function bins()
    {
        return $this->hasMany(Bin::class, 'franchise_id');
    }
}
