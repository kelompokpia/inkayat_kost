@extends('Layout_Admin.template')

@section('content')


<section class="mt-5">

<!-- START FORM -->
<form action='{{ url('datakamar/'.$data->nama_kamar) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 mt-3 bg-body rounded shadow-sm">
            <a href='{{ url('datakamar') }}' class="btn btn-secondary">kembali</a>
            <div class="mb-3 row">
                <label for="kamar" class="col-sm-2 col-form-label">Kamar</label>
                <div class="col-sm-10">
                    
                    <input type="text" class="form-control" name='nama_kamar' value="{{$data->nama_kamar}}"
                     id="nama_kamar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_penghuni'value="{{$data->nama_penghuni}}" id="nama_penghuni">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                {{$data->nik_penghuni}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat'value="{{$data->alamat}}" id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Telpon" class="col-sm-2 col-form-label">Telpon</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name='telepon_penghuni'value="{{$data->telepon_penghuni}}" id="telepon_penghuni">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="kamar" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
</form>
</section>
        <!-- AKHIR FORM -->