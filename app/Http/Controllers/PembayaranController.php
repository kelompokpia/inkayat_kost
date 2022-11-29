<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Pembayaran;
use App\Models\Tahun;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function show()
    {
        return view('datapembayaran.pembayaran', [
            'pembayarans' => Pembayaran::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function tambahPembayaran()
    {
        return view('datapembayaran.tambah-pembayaran', [
            'kamars' => Kamar::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function index()
    {
        return view('datapembayaran.tambah-pembayaran', [
            'kamars' => Kamar::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_kamar' => 'required',
            'tahun' => 'required',
            'jan' => '',
            'feb' => '',
            'mar' => '',
            'apr' => '',
            'mei' => '',
            'jun' => '',
            'jul' => '',
            'ags' => '',
            'sep' => '',
            'okt' => '',
            'nov' => '',
            'des' => ''
        ]);

        Pembayaran::create($validatedData);
        return redirect('/home/pembayaran')->with('success', 'Kamar berhasil dibuat');
    }

    public function edit()
    {
        return view('datapembayaran.edit-pembayaran');
    }

    public function tahun()
    {
        return view('datapembayaran.detail-pembayaran', [
            'pembayarans' => Pembayaran::orderBy('id_kamar', 'ASC')->get(),
            'tahuns' => Tahun::all(),
            'kamars' => Kamar::all()
        ]);
    }
}