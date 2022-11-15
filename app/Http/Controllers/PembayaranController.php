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

    public function tahun()
    {
        return view('datapembayaran.detail-pembayaran', [
            'pembayarans' => Pembayaran::orderBy('id_kamar', 'ASC')->get(),
            'tahuns' => Tahun::all(),
        ]);
    }
}