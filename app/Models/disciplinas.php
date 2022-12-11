<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disciplinas extends Model
{
    use HasFactory;
    protected $table = 'disciplinas';
    protected $fillable = 'disciplina';

    public function aluno()
    {
        return $this->belongsToMany(aluno::class, 'aluno_id');
    }
}
