@extends('layout.admin')

@section('content')

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
