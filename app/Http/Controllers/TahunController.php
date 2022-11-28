<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Tahun;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TahunController extends Controller
{

    public function show()
    {
        return view('datapembayaran.tambah-pembayaran', [
            'kamars' => Kamar::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|min:4|max:4'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Tahun::create($validatedData);

        return redirect('/home/pembayaran')->with('success', 'Tahun berhasil ditambahkan ke database.');
    }

    public function index()
    {
        return view('datapembayaran.pembayaran', [
            'tahuns' => Tahun::all()
        ]);
    }
}