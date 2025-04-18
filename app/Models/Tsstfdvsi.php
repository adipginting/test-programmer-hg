<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tsstfdvsi extends Model
{
    // use HasFactory;
    protected $fillable = [
        'kddvsi',
        'nama',
        'dvsic',
    ];

    public function tsstfkary()
    {
        return $this->hasOne(Tsstfkary::class, 'kddvsi', 'kddvsi');
    }
}
