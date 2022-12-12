<?php

namespace App\Models;

use App\Models\alunos\alunos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professors extends Model
{
    use HasFactory;

    public function curso()
    {
        return $this->belongsToMany(alunos::class, 'cursos_professors');
    }
}
