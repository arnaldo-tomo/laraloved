<?php

namespace App\Http\Controllers;

use App\Models\cidade;
use App\Models\home as ModelsHome;
use App\Models\User;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        $homes = ModelsHome::find(1);
        $user = User::find(1);


        echo $homes->d->nome;

        foreach ($user->home as $dado) {
            echo $dado->namespace . " ## " . $user;
        }
        // return view('welcome', compact('homes', 'user'));
    }
}
