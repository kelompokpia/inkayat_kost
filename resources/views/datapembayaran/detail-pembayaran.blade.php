@extends('Admin.dasbord')

@section('content')

<?php
$lastChar = substr(Request::url(), -4);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Data Pembayaran Kost {{ $lastChar }}</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-2">
          <div class="col-11">
            <select class="form-select" name="links" onchange="window.location.href=this.value;" aria-label="Default select example">
              <option>Pilih Tahun...</option>
              @foreach ($tahuns as $tahun)
                <option value="/pembayaran/{{ $tahun->slug }}">{{ $tahun->tahun }}</option>
              @endforeach
              <option value="#">Tambah tahun</option>
            </select>
          </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-11 table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kamar</th>
                        <th scope="col">Penghuni</th>
                        <th scope="col">Jatuh Tempo</th>
                        <th scope="col">Bayar</th>
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
                                    <th scope="row">{{ $pembayaran->kamar->id }}</th>
                                    <td>{{ $pembayaran->kamar->nama_kamar }}</td>
                                    <td>{{ $pembayaran->kamar->nama_penghuni }}</td>
                                    <td>Tgl. {!! substr($pembayaran->kamar->tanggal_masuk, -2) !!}</td>
                                    <td>Rp. {{ $pembayaran->kamar->harga_kamar }}.000</td>
                                    <td class="fs-3">@if ($pembayaran->jan === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->feb === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->mar === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->apr === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->mei === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->jun === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->jul === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->ags === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->sep === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->okt === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->nov === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-3">@if ($pembayaran->des === 'Lunas')<i class="bi bi-check text-success"></i>@else<i class="bi bi-x text-danger"></i>@endif</td>
                                    <td class="fs-5">
                                    <div class="dropdown">
                                        <div class="btn btn-secondary text-dark" style="background-color: transparent; border:0; padding:0;" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://wa.me/0{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau tanggal jatuh tempo pembayaran kos kamu setiap bulan tanggal {{ substr($pembayaran->kamar->tanggal_masuk, -2) }}.Jangan lupa untuk bayar kos untuk bulan ini ya!" target="_blank"><i class="bi bi-whatsapp pe-2"></i>Ingatkan</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square pe-2"></i>Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 pe-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>
@endsection