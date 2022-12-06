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
        return view('datapembayaran.pembayaran', [
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

    public function edit(Pembayaran $pembayaran)
    {
        return view('datapembayaran.edit-pembayaran', [
            'kamars' => Kamar::all(),
            'tahuns' => Tahun::all(),
            'pembayaran' => $pembayaran
        ]);
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        // $rules = [
        //     'id_kamar' => 'required',
        //     'tahun' => 'required',
        //     'jan' => '',
        //     'feb' => '',
        //     'mar' => '',
        //     'apr' => '',
        //     'mei' => '',
        //     'jun' => '',
        //     'jul' => '',
        //     'ags' => '',
        //     'sep' => '',
        //     'okt' => '',
        //     'nov' => '',
        //     'des' => ''
        // ];

        $validatedData = $request->validate([
            'id_kamar' => '',
            'tahun' => '',
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

        // $validatedData = $request->validate($rules);
        Pembayaran::where('id', $pembayaran->id)
            ->update($validatedData);
        return redirect('/home/pembayaran')->with('success', 'Data berhasil diperbarui.');

        // Pembayaran::where('id', $request->id)
        //     ->update($validatedData);
        // return redirect('/home/pembayaran')->with('success', 'Data berhasil diperbarui.');
    }

    public function tahun()
    {
        return view('datapembayaran.detail-pembayaran', [
            'pembayarans' => Pembayaran::orderBy('id_kamar', 'ASC')->get(),
            'tahuns' => Tahun::all(),
            'kamars' => Kamar::all()
        ]);
    }

    public function destroy($id)
    {
        Pembayaran::where('id', $id)->delete();
        return redirect()->to('/home/pembayaran')->with('success', 'Data berhasil dihapus.');
    }
}