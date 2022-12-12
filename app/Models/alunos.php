<?php

namespace App\Models\alunos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alunos extends Model
{

    use HasFactory;

    public function disciplinas()
    {
        return $this->belongsToMany(disciplina::class, 'aluno_disciplina', 'disciplina_id', 'aluno_id')->withTimestamps();
    }
}
