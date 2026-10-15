<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\PesanTamu;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKegiatan = Kegiatan::count();
        $totalPesan = PesanTamu::count();
        return view('admin.dashboard', compact('totalKegiatan', 'totalPesan'));
    }
}