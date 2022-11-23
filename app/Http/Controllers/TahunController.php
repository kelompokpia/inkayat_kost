<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TahunController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|min:4|max:4'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Tahun::create($validatedData);

        return redirect('/home/pembayaran')->with('success', 'Berhasil menambahkan tahun ke database.');
    }

    public function index()
    {
        return view('datapembayaran.pembayaran', [
            'tahuns' => Tahun::all()
        ]);
    }
}