<?php

namespace App\Http\Controllers;

use App\Models\pustaka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PustakaController extends Controller
{
    public function pustakas()
    {
        $pustaka = pustaka::paginate(28);
        return view('home.pustaka.index', [
            'pustaka' => $pustaka,
        ]);
    }

    public function detilPustaka(pustaka $pustaka)
    {
        $pustaka->load('provinsi');
        return view('home.pustaka.detil', [
            'pustaka' => $pustaka
        ]);
    }

    public function tradisis()
    {
        $pustaka = pustaka::where('jenis_budaya', 'tradisi')->paginate(28);
        return view('home.pustaka.tradisi', [
            'pustaka' => $pustaka,
        ]);
    }
    
    public function kesenians()
    {
        $pustaka = pustaka::where('jenis_budaya', 'kesenian')->paginate(28);
        return view('home.pustaka.kesenian', [
            'pustaka' => $pustaka,
        ]);
    }

    public function kuliners()
    {
        $pustaka = pustaka::where('jenis_budaya', 'kuliner')->paginate(28);
        return view('home.pustaka.kuliner', [
            'pustaka' => $pustaka,
        ]);
    }
}
