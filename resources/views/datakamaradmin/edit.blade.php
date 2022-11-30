@extends('layout.admin')

@section('content')


<section class="mt-5">
<div class="row justify-content-end">
<div class="col-7">
    <h1>Edit Data</h1>
</div>
</div>
<!-- START FORM -->
<form action='{{ url('home/datakamar/'.$data->nama_kamar) }}' method='post'>
    @csrf
    @method('PUT')
        <div class=" bg-body rounded shadow-sm">
            <div class="mb-3 row justify-content-center">
                <label for="kamar" class="col-sm-2 col-form-label">Kamar</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name='nama_kamar' value="{{$data->nama_kamar}}"
                     id="nama_kamar">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name='nama_penghuni'value="{{$data->nama_penghuni}}" id="nama_penghuni">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-4">
                {{$data->nik_penghuni}}
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name='alamat'value="{{$data->alamat}}" id="alamat">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="Telpon" class="col-sm-2 col-form-label">Telpon</label>
                <div class="col-sm-4">
                <input type="number" class="form-control" name='telepon_penghuni'value="{{$data->telepon_penghuni}}" id="telepon_penghuni">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="kamar" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>            <a href='{{ url('home/datakamar') }}' class="btn btn-secondary">kembali</a>
                </div>
            </div>
        </div>
</form>
</section>
@endsection
        <!-- AKHIR FORM -->