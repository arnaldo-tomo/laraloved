<?php

namespace App\Http\Controllers;

use AlunoDisciplina;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\alunos\alunos;
use App\Models\cursos;
use App\Models\disciplina\disciplinas;

class MController extends Controller
{
    public function home()
    {

        $aluno = App\Models\alunos::all();
        dd($aluno);
    }
}
