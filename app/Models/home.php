<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function dono()
    {
        return $this->belongsTo(dono::class);
    }

    public function tipo()
    {
        return $this->belongsTo(tipo::class);
    }
    public function cidade()
    {
        return $this->belongsTo(cidade::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
