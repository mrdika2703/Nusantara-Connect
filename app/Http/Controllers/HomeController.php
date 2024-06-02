<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function HomeSlide()
    {
        $active = 'active';
        // Menggunakan alias untuk kolom gambar-home1
        $HomeSlide = DB::select('SELECT * FROM home WHERE status = "active"');

        return view('home.index', ['HomeSlide' => $HomeSlide]);
    }
}
