<?php
namespace App\Http\Controllers;

use App\Models\PesanTamu;
use Illuminate\Http\Request;

class PesanTamuController extends Controller
{
    public function create()
    {
        return view('buku-tamu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required',
        ]);

        PesanTamu::create($request->all());
        return redirect()->route('buku-tamu.create')->with('success', 'Pesan tamu berhasil dikirim.');
    }

    public function index()
    {
        $pesanTamus = PesanTamu::latest()->paginate(10);
        return view('admin.pesan-tamu.index', compact('pesanTamus'));
    }

    public function destroy(PesanTamu $pesanTamu)
    {
        $pesanTamu->delete();
        return redirect()->route('admin.pesan-tamu.index')->with('success', 'Pesan tamu berhasil dihapus.');
    }
}