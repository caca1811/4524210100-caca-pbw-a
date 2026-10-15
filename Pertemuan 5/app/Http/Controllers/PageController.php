<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Setting;

class PageController extends Controller
{
    public function home()
    {
        $perPage = (int) Setting::get('home_kegiatan_per_page', 6);
        $kegiatans = Kegiatan::latest()->take($perPage)->get();
        return view('home', compact('kegiatans'));
    }

    public function profil()
    {
        return view('profil');
    }
}