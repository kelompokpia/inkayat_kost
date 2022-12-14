<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_kamar;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Session;

class controlkamar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10;
        if (strlen($katakunci)) {
            $data = data_kamar::where('nama_penghuni', 'like', "%$katakunci%")
                ->orWhere('nama_kamar', 'like', "%$katakunci%")
                ->orWhere('nik_penghuni', 'like', "%$katakunci%")
                ->orWhere('alamat', 'like', "%$katakunci%")
                ->orWhere('telepon_penghuni', 'like', "%$katakunci%")
                ->orWhere('harga_kamar', 'like', "%$katakunci%")
                ->orWhere('tanggal_masuk', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = data_kamar::orderBy('nama_kamar', 'desc')->paginate($jumlahbaris);
        }
        return view('datakamaradmin.data_kamar')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datakamaradmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_kamar', $request->nama_kamar);
        Session::flash('nama_penghuni', $request->nama_penghuni);
        Session::flash('nik_penghuni', $request->nik_penghuni);
        Session::flash('alamat', $request->alamat);
        Session::flash('telepon_penghuni', $request->telepon_penghuni);
        Session::flash('harga_kamar', $request->harga_kamar);
        Session::flash('tanggal_masuk', $request->tanggal_masuk);
        Session::flash('status_kamar', $request->status_kamar);

        $request->validate([
            'nama_kamar' => 'required',
            'nama_penghuni' => 'required',
            'nik_penghuni' => 'required|numeric|unique:kamars,nik_penghuni',
            'alamat' => 'required',
            'telepon_penghuni' => 'required|numeric|unique:kamars,telepon_penghuni',
            'harga_kamar' => 'required',
            'tanggal_masuk' => '',
            'status_kamar' => 'required',
        ], [
            'nama_kamar.required' => 'Kamar wajib di isi',
            'nama_penghuni.required' => 'Nama wajib di isi',
            'nik_penghuni.required' => 'NIK wajib di isi & tidak boleh sama',
            'alamat.required' => 'Alamat wajib di isi',
            'telepon_penghuni.required' => 'Telpon wajib di isi & tidak boleh sama',
            'harga_kamar.required' => 'Harga Kamar wajib di isi',
            'tanggal_masuk.required' => 'Tanggal Masuk wajib di isi',
            'status_kamar.required' => 'Status kamar wajib diisi',
        ]);
        $data = [
            'nama_kamar' => $request->nama_kamar,
            'nama_penghuni' => $request->nama_penghuni,
            'nik_penghuni' => $request->nik_penghuni,
            'alamat' => $request->alamat,
            'telepon_penghuni' => $request->telepon_penghuni,
            'harga_kamar' => $request->harga_kamar,
            'tanggal_masuk' => $request->tanggal_masuk,
            'status_kamar' => $request->status_kamar
        ];

        data_kamar::create($data);
        return redirect()->to('home/datakamar')->with('success', 'Berhasil Menambahkan data Inkayat Kost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = data_kamar::where('id', $id)->first();
        return view('datakamaradmin.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, data_kamar $data_kamar)
    {
            $kamar = data_kamar::find($request->id);
            $telepon = $kamar['telepon_penghuni'];

            $rules = $request->validate([
                'nama_kamar' => 'required',
                'nama_penghuni' => 'required',
                'alamat' => 'required',
                'harga_kamar' => 'required',
                'tanggal_masuk' => '',
                'status_kamar' => 'required',
            ], [
                'nama_kamar.required' => 'Kamar wajib diisi',
                'nama_penghuni.required' => 'Nama wajib diisi',
                'nik_pebghuni.numeric' => 'NIK wajib diisi & tidak boleh sama',
                'alamat.required' => 'Alamat wajib di isi',
                'telepon_penghuni.numeric' => 'Telpon wajib diisi & tidak boleh sama',
                'harga_kamar.required' => 'Harga Kamar wajib diisi',
                'tanggal_masuk.required' => 'Tanggal Masuk wajib diisi',
                'status_kamar.required' => 'Status kamar wajib diisi',
            ]);

            if ($request->telepon_penghuni != $telepon) {
                $rules['telepon_penghuni'] = 'required|numeric|unique:kamars,telepon_penghuni';
            }
            $data = [
                'nama_kamar' => $request->nama_kamar,
                'nama_penghuni' => $request->nama_penghuni,
                'alamat' => $request->alamat,
                'telepon_penghuni' => $request->telepon_penghuni,
                'harga_kamar' => $request->harga_kamar,
                'tanggal_masuk' => $request->tanggal_masuk,
                'status_kamar' => $request->status_kamar
            ];
            if ($request->telepon_penghuni != $telepon) {
                $data['telepon_penghuni'] = $request->telepon_penghuni;
            }

            data_kamar::where('id', $id)->update($data);
            return redirect()->to('home/datakamar')->with('success', 'Berhasil Mengubah data Inkayat Kost');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        data_kamar::where('id', $id)->delete();
        Pembayaran::where('id_kamar', $id)->delete();
        return redirect()->to('home/datakamar')->with('success', 'Berhasil menghapus data');
    }
}