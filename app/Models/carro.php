<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function dono()
    {
        return $this->belongsToMany(dono::class);
    }
}
