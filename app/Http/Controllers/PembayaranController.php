<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Pembayaran;
use App\Models\Tahun;
use App\Models\Pemasukan;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        // Baru
        return view('pembayaran_baru.pembayaran', [
            'tahuns' => Tahun::all()
        ]);

        // return view('datapembayaran.pembayaran', [
        //     'tahuns' => Tahun::all()
        // ]);
    }

    public function index()
    {
        // Baru
        return view('pembayaran_baru.pembayaran', [
            'tahuns' => Tahun::all()
        ]);

        // return view('datapembayaran.pembayaran', [
        //     'tahuns' => Tahun::all()
        // ]);
    }

    public function show()
    {
        // Baru
        return view('pembayaran_baru.pembayaran', [
        // Baru
        return view('pembayaran_baru.pembayaran', [
            'pembayarans' => Pembayaran::all(),
            'tahuns' => Tahun::all()
        ]);

        // return view('datapembayaran.pembayaran', [
        //     'pembayarans' => Pembayaran::all(),
        //     'tahuns' => Tahun::all()
        // ]);

        // return view('datapembayaran.pembayaran', [
        //     'pembayarans' => Pembayaran::all(),
        //     'tahuns' => Tahun::all()
        // ]);
    }

    public function tambahPembayaran()
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

        $tahun = $pembayaran->tahun;

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

        Pembayaran::where('id', $pembayaran->id)
            ->update($validatedData);
        return redirect('/home/pembayaran')->with('success', 'Data berhasil diperbarui.');

        // Pembayaran::where('id', $request->id)
        //     ->update($validatedData);
        // return redirect('/home/pembayaran')->with('success', 'Data berhasil diperbarui.');
    }

    public function tahun()
    {
        $url = $_SERVER['REQUEST_URI'];
        $bagi = explode('/', $url);
        $tahun = $bagi[3];
        $bulan = $bagi[4];

        $kamarDenganPemasukan = Kamar::query()
            ->leftJoin('pemasukan', 'pemasukan.pengekost', '=', 'kamars.id')
            ->where('pemasukan.tahun', $tahun) // Filter berdasarkan tahun
            ->where('pemasukan.bulan', $bulan) // Filter berdasarkan bulan
            ->select('kamars.*', 'pemasukan.*') // Pilih semua kolom dari tabel 'kamars'
            ->get();

        return view('pembayaran_baru.pembayaran', [
            // 'pembayarans' => Pembayaran::orderBy('id_kamar', 'ASC')->get(),
            'tahuns' => Tahun::all(),
            // 'jumlah_data' => Pemasukan::count(),
            'pengekost' => Kamar::all(),
            'sdhbayar' => $kamarDenganPemasukan,
            'jumlah' => Pemasukan::where('tahun', $tahun)->where('bulan', $bulan)->count(),
            'tahun' => $tahun,
            'bulan' => $bulan
            // 'kamars' => Kamar::all()
        ]);
    }

    public function destroy($id)
    {
        Pembayaran::where('id', $id)->delete();
        return redirect()->to('/home/pembayaran')->with('success', 'Data berhasil dihapus.');
    }
}

