@extends('layout.admin')

@section('content')


<section class="mt-5">
<!-- START FORM -->
<div class="row justify-content-center">
<div class="col-7">
    <h1>Tambah Data</h1>
    @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $data)
                      <li>{{$data }} </li>
                  @endforeach
             </ul>
        </div>
@endif
</div>
</div>

<form action='{{ url('home/datakamar') }}' method='post'>
    @csrf
            <div class="mb-3 row justify-content-center">
                <label for="kamar" class="col-sm-2 col-form-label">Kamar</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name='nama_kamar' value="{{Session::get
                        ('nama_kamar')}}" id="nama_kamar">
                    </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name='nama_penghuni'value="{{Session::get
                        ('nama_penghuni')}}" id="nama_penghuni">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name='nik_penghuni'value="{{Session::get
                        ('nik_penghuni')}}" id="nik_penghuni">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name='alamat'value="{{Session::get
                        ('alamat')}}" id="alamat">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="Telpon" class="col-sm-2 col-form-label">Telpon</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name='telepon_penghuni'value="{{Session::get
                        ('telepon_penghuni')}}" id="telepon_penghuni">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="Harga Kamar" class="col-sm-2 col-form-label">Harga Kamar</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name='harga_kamar'value="{{Session::get
                        ('harga_kamar')}}" id="harga_kamar">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="Tanggal Masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name='tanggal_masuk'value="{{Session::get
                        ('tanggal_masuk')}}" id="tanggal_masuk">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="status_kamar" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" name="status_kamar" id="status_kamar">
                        <option selected></option>
                        <option value="Tersedia" {{ (Session::get('status_kamar')=='Tersedia')? 'selected':' ' }}>Tersedia</option>
                        <option value="Terisi" {{ (Session::get('status_kamar')=='Terisi')? 'selected':' ' }}>Terisi</option>
                        </select>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="kamar" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    <a href='{{ url('home/datakamar') }}' class="btn btn-secondary">kembali</a>
                </div>
            </div>
        </div>
</form>
</section>
@endsection
        <!-- AKHIR FORM -->