@extends('layout.admin')

@section('content')


<section class="mt-5">

<!-- START FORM -->
<form action='{{ url('datakamar') }}' method='post'>
    @csrf
        <div class="my-3 p-3 mt-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="kamar" class="col-sm-2 col-form-label">Kamar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_kamar' value="{{Session::get
                        ('nama_kamar')}}" id="nama_kamar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_penghuni'value="{{Session::get
                        ('nama_penghuni')}}" id="nama_penghuni">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nik_penghuni'value="{{Session::get
                        ('nik_penghuni')}}" id="nik_penghuni">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat'value="{{Session::get
                        ('alamat')}}" id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Telpon" class="col-sm-2 col-form-label">Telpon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='telepon_penghuni'value="{{Session::get
                        ('telepon_penghuni')}}" id="telepon_penghuni">
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