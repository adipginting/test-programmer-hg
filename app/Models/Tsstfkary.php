<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tsstfkary extends Model
{

    protected $fillable = [
        'kdkary',
        'nama',
        'email',
        'phone',
        'kddvsi',
        'dob',
        'regdt'
    ];

    public function tsstfdvsi()
    {
        return $this->belongsTo(Tsstfdvsi::class, 'kddvsi', 'kddvsi');
    }
}
