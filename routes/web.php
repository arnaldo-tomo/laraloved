<?php

use App\Http\Controllers\home;
use App\Models\alunos;
use App\Models\disciplina;
use App\Models\disciplinas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $dado = alunos::all();
    dd($dado);
});
