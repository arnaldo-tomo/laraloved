<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disciplina extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function aluno()
    {
        return $this->belongsToMany(aluno::class);
    }
}
