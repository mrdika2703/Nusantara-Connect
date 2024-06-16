<?php

namespace App\Http\Controllers;

use App\Models\tekshome;
use Illuminate\Http\Request;

class ControllerTekshomes extends Controller
{
    public function tekshome()
    {
        $tekshome = tekshome::all();
        return view('home.index', [
            'tekshome' => $tekshome,
        ]);
    }
}
