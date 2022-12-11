<?php

use App\Http\Controllers\home;
use App\Models\alunos;
use App\Models\disciplina;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $aluno = alunos::find(1);
    // dd($aluno->disciplina->disciplina);

    return view('welcome');
});

// route::get('/home', [home::class, 'home'])->name('home');
