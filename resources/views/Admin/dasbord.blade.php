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
                <h3>13</h3>
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
                <h3>100</sup></h3>
                <p>Jumlah Penghuni</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                {{-- @foreach ($analyticsData as $data) --}}
                {{-- {{ $data['pageViews'] }} --}}
                <h3>11</h3>
                <p>Pengunjung Website</p>
                {{-- @endforeach --}}
              </div>
              <div class="icon">
                <i class="ion  ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          {{-- <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="row">
          <section class="col-lg-12 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Daftar Penghuni
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                    </div>
                    <span class="text">Dina faradina</span>
                    <div class="tools">
                      <a href="wa.me/6282242478858" class="text-dark "><i class="fa-brands fa-square-whatsapp fs-2"></i></a>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                    </div>
                    <span class="text">Nina sari</span>
                    <div class="tools">
                      <a href="wa.me/6282242478858" class="text-dark "><i class="fa-brands fa-square-whatsapp fs-2"></i></a>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2"></div>
                    <span class="text">Noni Siti</span>
                    <div class="tools">
                      <a href="wa.me/6282242478858" class="text-dark "><i class="fa-brands fa-square-whatsapp fs-2"></i></a>
                    </div>
                  </li>
                </ul>
              </div>
          </section>
        </div>
      </div>
    </section>
  </div>
@endsection
