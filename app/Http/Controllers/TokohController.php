<?php

namespace App\Http\Controllers;

use App\Models\tokoh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokohController extends Controller
{
    public function tokohs(Request $request)
    {
        $tokoh = tokoh::all();
        return view('home.tokoh.index', [
            'tokoh' => $tokoh,
        ]);
    }

    public function detilTokoh(tokoh $tokoh, Request $request)
    {
        $tokoh->load('provinsi');
        return view('home.tokoh.detil', [
            'tokoh' => $tokoh
        ]);
    }
}
