@extends('layout.admin')

@section('content')
<section class="home">
  <div class="container-lg py-5">
    <div class="row">
      <h2 class="fw-bold mb-2">Data Admin</h2>
  </div>
    <div class="card-body border">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <table class="table table-sm table-striped">
          <thead>
              <tr>
                  <th class="col-md-1">Nama</th>
                  <th class="col-md-3">Email</th>
                  <th class="col-md-3">Hapus</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($data as $item)
              <tr>
                  <td>{{ $item->name}}</td>
                  <td>{{ $item->email}}</td>
                  <td>
                    <a href='{{url('home/pengaturan/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Ubah</a>
                    <form onsubmit="return confirm('Yakin ingin menghapus data?')" class ='d-inline' action="{{ url('home/pengaturan/'.$item->email)}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-primary btn-sm" >Hapus</button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>                    
      </table>
      </div>
    <div class="col-lg-6">
        <form action='{{ url('home/pengaturan') }}' method='post'>
          @csrf
                  <div class="mb-3 row justify-content-center">
                      <label for="kamar" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" name='name' value="{{Session::get
                              ('name')}}" id="name">
                          </div>
                  </div>
                  <div class="mb-3 row justify-content-center">
                      <label for="nama" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-4">
                          <input type="email" class="form-control" name='email'value="{{Session::get
                              ('email')}}" id="email">
                      </div>
                  </div>
                  <div class="mb-3 row justify-content-center">
                      <label for="nik" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-4">
                          <input type="password" class="form-control" name='password'value="{{Session::get
                              ('password')}}" id="password">
                      </div>
                  </div>
                  <div class="mb-3 row justify-content-center">
                      <label for="users" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-4">
                          <button type="submit" class="btn btn-primary" name="submit">Register</button>
                      </div>
                  </div>
              </div>
      </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

@endsection