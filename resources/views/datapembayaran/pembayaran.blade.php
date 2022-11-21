@extends('Admin.dasbord')

@section('content')

<?php
$lastChar = substr(Request::url(), -4);
?>

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-11">
                <h1>Data Pembayaran Kost</h1>
            </div>
        </div>

        {{-- Menu Pilih Tahun --}}
        <div class="row justify-content-center mb-4">
          <div class="col-11">
            @if (session()->has('success'))
              <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
          </div>
          <div class="col-9">
            <select class="form-select pt-2 pb-2" name="links" onchange="window.location.href=this.value;" aria-label="Default select example">
              <option>Pilih Tahun...</option>
              @foreach ($tahuns as $tahun)
                <option value="/home/pembayaran/{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
              @endforeach
            </select>
          </div>

          {{-- Tambah tahun --}}
          <div class="col-2"><button class="btn btn-primary pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#tambahTahun">Tambah tahun <i class="bi bi-plus-square"></i></button></div>
        </div>
    </div>
    @include('datapembayaran.tambah-tahun')
</section>
@endsection