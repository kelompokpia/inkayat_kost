@extends('layout.admin')

@section('content')
<?php 
$date=date("Y-d-m");
$tahun=substr($date,0,4);
$bulan=substr($date,-2);
if ($bulan==1) {
  $namabulan='Januari';
  $bulan='jan';
}
elseif ($bulan==2) {
  $namabulan='Februari';
  $bulan='feb';
}
elseif ($bulan==3) {
  $namabulan='Maret';
  $bulan='mar';
}
elseif ($bulan==4) {
  $namabulan='April';
  $bulan='apr';
}
elseif ($bulan==5) {
  $namabulan='Mei';
  $bulan='mei';
}
elseif ($bulan==6) {
  $namabulan='Juni';
  $bulan='jun';
}
elseif ($bulan==7) {
  $namabulan='Juli';
  $bulan='jul';
}
elseif ($bulan==8) {
  $namabulan='Agustus';
  $bulan='ags';
}
elseif ($bulan==9) {
  $namabulan='Sebtember';
  $bulan='sep';
}
elseif ($bulan==10) {
  $namabulan='Oktober';
  $bulan='okt';
}
elseif ($bulan==11) {
  $namabulan='November';
  $bulan='nov';
}
elseif ($bulan==12) {
  $namabulan='Desember';
  $bulan='des';
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $count }}</h3>
                <p>Kamar</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $data }}</h3>
                <p>Jumlah Penghuni</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <section class="col-lg-6 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Daftar Penghuni
                </h3>
              </div>
              <div class="card-body">
                
                  <table class="table-auto table table-bordered">
                    <tbody>
                      @foreach ($nama as $nama)
                      <tr>
                        <td>{{$nama->nama_penghuni}}</td>
                        <td><a href="https://wa.me/{{$nama->telepon_penghuni}}"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
          </section>
          <section class="col-lg-6 col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="ion ion-clipboard mr-1"></i>
                      Belum bayar bulan ini ({{ $namabulan }})
                    </h3>
                  </div>
                  <div class="card-body">
                    
                      <table class="table-auto table table-bordered">
                        <tbody>
                          @foreach ($pembayaran as $pembayaran)
                          @if ($pembayaran->tahun==$tahun)
                            @if ($bulan=='jan')
                              @if ($pembayaran->jan!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='feb')
                              @if ($pembayaran->feb!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='mar')
                              @if ($pembayaran->mar!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='apr')
                              @if ($pembayaran->apr!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='mei')
                              @if ($pembayaran->mei!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='jun')
                              @if ($pembayaran->jun!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='jul')
                              @if ($pembayaran->jul!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='ags')
                              @if ($pembayaran->ags!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='sep')
                              @if ($pembayaran->sep!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='okt')
                              @if ($pembayaran->okt!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='nov')
                              @if ($pembayaran->nov!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                            @if ($bulan=='des')
                              @if ($pembayaran->des!="Lunas")
                              <tr>
                                <td>Kamar {{ $pembayaran->kamar->nama_kamar }} - {{ $pembayaran->kamar->nama_penghuni }}</td>
                                <td><a href="https://wa.me/{{ $pembayaran->kamar->telepon_penghuni }}?text=Hai, {{ $pembayaran->kamar->nama_penghuni }}. Sekedar mengingatkan kalau untuk bulan {{ $namabulan }}, kamu belum membayar uang kos. Jangan lupa untuk bayar kos untuk bulan ini ya!" title="Ingatkan" target="_blank"><i class="fa-brands fa-square-whatsapp text-dark fs-2"></i></a></td>
                                <td><a href="/home/pembayaran/{{ $pembayaran->id }}/edit"><i class="bi bi-pencil-square pe-2"></i>Edit</a></td>
                              </tr>
                              @endif
                            @endif
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
          </section>
          <section class="col-lg-6 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Daftar Pengunjung Website
                </h3>
              </div>
              <div class="card-body">
                <table class="table-auto table table-bordered">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Pengunjung</th>
                      <th>Halaman</th>
                      <th>Dilihat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($analyticsData as $data)
                    <tr>
                      <td>{{ $data['date'] }}</td>
                      <td>{{ $data['visitors'] }}</td>
                      <td>{{ $data['pageTitle'] }}</td>
                      <td>{{ $data['pageViews'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
      </section>
    </div>
  </section>
</div>
@endsection
