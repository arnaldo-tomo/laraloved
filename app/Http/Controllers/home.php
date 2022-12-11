<?php

namespace App\Http\Controllers;

use App\Models\aluno;
use App\Models\carro;
use App\Models\cidade;
use App\Models\disciplina;
use App\Models\dono;
use App\Models\home as ModelsHome;
use App\Models\User;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        $dono = dono::find(1);



        dd($dono);
        // return view('welcome', compact('carro'));
    }
}
