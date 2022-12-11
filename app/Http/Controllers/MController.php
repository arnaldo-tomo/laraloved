<?php

namespace App\Http\Controllers;

use App\Models\alunos;
use App\Models\disciplinas;
use Illuminate\Http\Request;

class MController extends Controller
{
    public function home()
    {
        $dado = disciplinas::find(1);
        dd($dado->aluno->aluno);
    }
}
