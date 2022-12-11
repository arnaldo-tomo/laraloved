<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dono extends Model
{
    use HasFactory;

    public function home()
    {
        return $this->belongsTo(home::class);
    }

    public function carro()
    {
        return $this->belongsToMany(carro::class);
    }
}
