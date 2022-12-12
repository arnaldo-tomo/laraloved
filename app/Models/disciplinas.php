<?php

namespace App\Models\disciplina;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disciplinas extends Model
{

    use HasFactory;

    public function aluno()
    {
        return $this->belongsToMany(aluno::class, 'aluno_disciplina', 'aluno_id', 'disciplina_id')->withTimestamps();
    }
}
