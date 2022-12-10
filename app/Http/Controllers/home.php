<?php

namespace App\Http\Controllers;

use App\Models\home as ModelsHome;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        $homes = ModelsHome::all();
        return view('welcome', compact('homes'));
    }
}
