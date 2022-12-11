<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alunos extends Model
{
    protected $table = 'alunos';
    protected $fillable = array('aluno');
    use HasFactory;

    public function disciplinas()
    {
        return $this->belongsToMany(disciplina::class, 'disciplina_id');
    }
}
