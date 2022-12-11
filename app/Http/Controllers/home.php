<?php

namespace App\Http\Controllers;

use App\Models\aluno;
use App\Models\cidade;
use App\Models\home as ModelsHome;
use App\Models\User;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        $alunos = aluno::find(1);

        echo $alunos->disciplina->nome;

        // $homes = ModelsHome::find(1);
        // $user = User::find(1);


        // echo $homes->d->nome;

        // foreach ($user->home as $dado) {
        //     echo $dado->namespace . " ## " . $user;
        // }
        // return view('welcome', compact('homes', 'user'));
    }
}
