<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Models\jadwal;
use App\Models\pustaka;
use App\Models\tekshome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function HomeSlide()
    {
        $HomeSlide = DB::table('home')->where('status', 'active')->limit(1)->get();
        $tekshome = tekshome::inRandomOrder()->limit(1)->get();
        $jadwal = jadwal::orderBy('tanggal_jadwal')->take(4)->get();
        $budaya = pustaka::inRandomOrder()->limit(4)->get();

        return view('home.index', ['HomeSlide' => $HomeSlide, 'jadwals' => $jadwal, 'tekshome' => $tekshome, 'budaya' => $budaya]);
    }
}
