@extends('layout.admin')

@section('content')

<?php
// $lastChar = substr(Request::url(), -4);
?>

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-11">
                <h1>Data Pembayaran Kost Baru</h1>
            </div>
        </div>

        <!-- Cek session -->
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif
        @if (session()->has('failed'))
            <div class="alert alert-success" role="alert">{{ session('failed') }}</div>
        @endif

        <!-- BARU!!! -->
        <!-- Menu pilihan tahun & bulan -->
        <div class="row justify-content-center mb-4">
            <div class="col-11">
                <div class="row">
                    <div class="col-2">
                        <select name="tahun" id="tahun" class="form-select pt-2 pb-2">
                            @foreach ($tahuns as $t)
                                <option @if ($tahun==$t->tahun) selected @endif value="{{$t->tahun}}">{{$t->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <select name="tahun" id="tahun" class="form-select pt-2 pb-2">
                            <option @if ($bulan=="01") selected @endif value="01">Januari</option>
                            <option @if ($bulan=="02") selected @endif value="02">Februari</option>
                            <option @if ($bulan=="03") selected @endif value="03">Maret</option>
                            <option @if ($bulan=="04") selected @endif value="04">April</option>
                            <option @if ($bulan=="05") selected @endif value="05">Mei</option>
                            <option @if ($bulan=="06") selected @endif value="06">Juni</option>
                            <option @if ($bulan=="07") selected @endif value="07">Juli</option>
                            <option @if ($bulan=="08") selected @endif value="08">Agustus</option>
                            <option @if ($bulan=="09") selected @endif value="09">September</option>
                            <option @if ($bulan=="10") selected @endif value="10">Oktober</option>
                            <option @if ($bulan=="11") selected @endif value="11">November</option>
                            <option @if ($bulan=="12") selected @endif value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn" style="background-color: #dbd9a1;" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        Tambah
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah bulan baru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">Tahun</label>
                                    <input type="number" class="form-control" id="tahun" value="2024">
                                </div>
                                <div class="mb-3">
                                    <label for="bulan" class="form-label">Bulan</label>
                                    <select class="form-select" aria-label="Pilih bulan" id="bulan">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06" selected>Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tampil data pembayaran pengekost -->
        <div class="row justify-content-center">
            <div class="col-11">

                <div class="table">
                    <table class="table table-hover">
                        <thead>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Kamar</th>
                            <th>Tagihan</th>
                            <th>Tenggat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach ($pengekosts as $p)
                            @php
                                $bln2=['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli', 'Agustus','September','Oktober','November','Desember'];
                                $tgl_masuk=$p->tanggal_masuk;
                                $bagi=explode('-', $tgl_masuk);
                                $bln_masuk=$bln2[$bulan[1]-1];
                                
                                // Cek ada data pembayaran atau tidak
                                if (empty($p->pemasukan)) {
                                    $status=0; //Belum bayar
                                    
                                    // cek selisih hari ini dan tenggat bayar
                                    $hariini=new dateTime();
                                    $hariini->setTimezone(new DateTimeZone('Asia/Jakarta'));
                                    $tenggat=new dateTime($tahun.'-'.$bulan.'-'.$bagi[2]);
                                    $tenggat->setTimezone(new DateTimeZone('Asia/Jakarta'));
                                    $selisih=$hariini->diff($tenggat)->days;
                                } else{
                                    $status=1; //Sudah bayar
                                    $selisih=0;
                                }
                            @endphp
                            <tr>
                                <td>@php echo $i; $i++ @endphp</td>
                                <td>{{$p->nama_penghuni}}</td>
                                <td>{{$p->nama_kamar}}</td>
                                <td>
                                    Rp. @php echo number_format($p->harga_kamar, 0, ',', '.'); @endphp
                                    @if ($status==0 && $selisih>0)
                                        @php
                                            $denda=$selisih*5000;
                                        @endphp
                                        <br><div class="text-danger" title="Denda">(+{{ number_format($denda, 0, ',', '.'); }})</div>
                                    @endif
                                </td>
                                <td>
                                    {{$bagi[2].' '.$bln_masuk}}
                                    @if ($status==0 && $selisih>0)
                                        <br><div class="text-danger">(Telat {{ $selisih }} hari)</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($status==0)
                                        Belum bayar
                                    @else
                                        Sudah bayar
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown dropup">
                                        <button class="btn" style="background-color: #dbd9a1;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i data-feather="phone" style="width: 17px; margin-right: 10px;"></i>Ingatkan</a></li>
                                            <li><a class="dropdown-item" href="#"><i data-feather="check-circle" style="width: 17px; margin-right: 10px;"></i>Sudah bayar</a></li>
                                            <li><a class="dropdown-item" href="#"><i data-feather="user-x" style="width: 17px; margin-right: 10px;"></i>Keluarkan pengekost</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>99</td>
                                <td>Muklis Suparyanto Nugroho Saputro</td>
                                <td>Kamar 2</td>
                                <td>Rp.500.000</td>
                                <td>10 Juni</td>
                                <td>Belum bayar</td>
                                <td>
                                    <div class="dropdown dropup">
                                        <button class="btn" style="background-color: #dbd9a1;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i data-feather="phone" style="width: 17px; margin-right: 10px;"></i>Ingatkan</a></li>
                                            <li><a class="dropdown-item" href="#"><i data-feather="check-circle" style="width: 17px; margin-right: 10px;"></i>Sudah bayar</a></li>
                                            <li><a class="dropdown-item" href="#"><i data-feather="user-x" style="width: 17px; margin-right: 10px;"></i>Keluarkan pengekost</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ahmad Supardi <button class="btn" style="border-radius: 100px;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i data-feather="alert-circle" style="color: red; width:20px;"></i></button></td>
                                <td>Kamar 1</td>
                                <td>Rp.520.000<br><div class="text-danger">(+Rp.25.000)</div></td>
                                <td>1 Juni<br><div class="text-danger">(Telat 5 hari)</div></td>
                                <td>Belum bayar</td>
                                <td>
                                <div class="dropdown dropup">
                                        <button class="btn" style="background-color: #dbd9a1;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i data-feather="phone" style="width: 17px; margin-right: 10px;"></i>Ingatkan</a></li>
                                            <li><a class="dropdown-item" href="#"><i data-feather="check-circle" style="width: 17px; margin-right: 10px;"></i>Sudah bayar</a></li>
                                            <li><a class="dropdown-item" href="#"><i data-feather="user-x" style="width: 17px; margin-right: 10px;"></i>Keluarkan pengekost</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Menu Pilih Tahun --}}
        <!-- <div class="row justify-content-center mb-4">
          <div class="col-11">
            @if (session()->has('success'))
              <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
            @if (session()->has('failed'))
              <div class="alert alert-success" role="alert">{{ session('failed') }}</div>
            @endif
          </div>
          <div class="col-9">
            <select class="form-select pt-2 pb-2" name="links" onchange="window.location.href=this.value;" aria-label="Default select example">
              <option>Pilih Tahun...</option>
              @foreach ($tahuns as $tahun)
                <option value="/home/pembayaran/tahun/{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
              @endforeach
            </select>
          </div>

          {{-- Tambah tahun --}}
          <div class="col-2"><button class="btn btn-primary pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#tambahTahun">Tambah tahun <i class="bi bi-plus-square"></i></button></div>
        </div> -->
    </div>
    @include('datapembayaran.tambah-tahun')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pengekos telat membayar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="text-center mb-2"><i data-feather="alert-triangle" style="color: red; width:50px;"></i></div>
        <p>Nama telah telat membayar kost selama 5 hari, sehingga denda yang harus dibayar oleh pengekos tersebut adalah Rp. 20.000,00.</p> 
        <p>Anda berhak mengeluarkan nama jika dalam 2 hari belum membayar kost.</p>
      </div>
    </div>
  </div>
</div>

</section>
@endsection