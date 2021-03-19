<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
    ];

    public function franchise()
    {
        return $this->belgonsTo(Franchise::class);
    }
}
