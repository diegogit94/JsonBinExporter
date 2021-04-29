<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankFranchise extends Model
{
    use HasFactory;

    public function bank()
    {
        return $this->hasMany(Bank::class);
    }

    public function franchise()
    {
        return $this->hasMany(Franchise::class);
    }
}
