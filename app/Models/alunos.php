<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alunos extends Model
{
    use HasFactory;

    public function disciplina()
    {
        return $this->belongsToMany(disciplina::class);
    }
}
