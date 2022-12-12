<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\cursos;
use App\Models\disciplina\disciplinas;

class MController extends Controller
{
    public function home()
    {

        $dado = cursos::find(1);
        dd($dado->professor->nome);
    }
}
