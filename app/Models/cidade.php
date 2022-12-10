<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
    use HasFactory;

    public function home()
    {
        return $this->belongsTo(home::class);
    }
}
