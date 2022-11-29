@extends('layout.admin')
<?php
$lastChar = substr(Request::url(), -4);
?>

@section('content')

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
              <option value="">Pilih Tahun...</option>
              @foreach ($tahuns as $tahun)
                <option value="/home/pembayaran/tahun/{{ $tahun->tahun }}" {{ ($tahun->tahun===$lastChar)? 'selected':'' }}>{{ $tahun->tahun }}</option>
              @endforeach
            </select>
          </div>

          {{-- Tambah tahun --}}
          <div class="col-2"><button class="btn btn-primary pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#tambahTahun">Tambah tahun <i class="bi bi-plus-square"></i></button></div>
        </div>

        {{-- Tabel Pembayaran --}}
        <div class="row justify-content-center">
            <div class="col-md-11 table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr class="text-center">
                        {{-- <th scope="col">No</th> --}}
                        <th scope="col">Kamar</th>
                        <th scope="col">Penghuni</th>
                        <th scope="col">Jatuh Tempo</th>
                        {{-- <th scope="col">Bayar</th> --}}
                        <th scope="col">Jan</th>
                        <th scope="col">Feb</th>
                        <th scope="col">Mar</th>
                        <th scope="col">Apr</th>
                        <th scope="col">Mei</th>
                        <th scope="col">Jun</th>
                        <th scope="col">Jul</th>
                        <th scope="col">Ags</th>
                        <th scope="col">Sep</th>
                        <th scope="col">Okt</th>
                        <th scope="col">Nov</th>
                        <th scope="col">Des</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($pembayarans as $pembayaran)
                            @if ($pembayaran->tahun == $lastChar)
                                <tr>
                                    {{-- <th scope="row">{{ $pembayaran->kamar->id }}</th> --}}
                                    <td>{{ $pembayaran->kamar->nama_kamar }}</td>
                                    <td>{{ $pembayaran->kamar->nama_penghuni }}</td>
                                    <td class="text-center">Tgl. {!! substr($pembayaran->kamar->tanggal_masuk, -2) !!}</td>
                                    {{-- <td>{{ $pembayaran->kamar->harga_kamar }}K</td> --}}
                                    <td class="fs-3">@if ($pembayaran->jan === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->jan === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->feb === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->feb === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->mar === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->mar === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->apr === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->apr === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->mei === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->mei === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->jun === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->jun === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->jul === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->jul === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->ags === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->ags === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->sep === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->sep === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->okt === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->okt === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->nov === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->nov === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-3">@if ($pembayaran->des === 'Lunas')<i class="bi bi-check text-success"></i> @elseif ($pembayaran->des === 'Belum bayar') <i class="bi bi-x text-danger"></i> @else <i class="bi bi-dot" style="color: #868686; font-size:2rem;"></i> @endif</td>
                                    <td class="fs-5">
                                    <div class="dropdown">
                                        <div class="btn text-dark mt-2" style="background-color: transparent; border:0; padding:0;" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://wa.me/0{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau tanggal jatuh tempo pembayaran kos kamu setiap bulan tanggal {{ substr($pembayaran->kamar->tanggal_masuk, -2) }}.Jangan lupa untuk bayar kos untuk bulan ini ya!" target="_blank"><i class="bi bi-whatsapp pe-2"></i>Ingatkan</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square pe-2"></i>Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat pe-2"></i>Reset</a></li>
                                        </ul>
                                    </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                  </table>
                  <div class="text-center"><a href="/home/pembayaran/tambah-pembayaran"><button class="btn btn-primary mt-3">Tambah data pembayaran <i class="bi bi-plus-square"></i></button></a></div>
            </div>
        </div>
    </div>
    @include('datapembayaran.tambah-tahun')
</section>
@endsection