<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function show()
    {
        return view('datapembayaran.pembayaran');
    }
}