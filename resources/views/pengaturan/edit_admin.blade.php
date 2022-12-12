@extends('layout.admin')

@section('content')
<section class="home">
  <div class="container-lg py-5">
    <div class="row">
      <h2 class="fw-bold mb-2">Data Admin</h2>
  </div>
    <div class="card-body border">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        
        <table class="table table-sm table-striped">
          <thead>
              <tr>
                  <th class="col-md-1">Nama</th>
                  <th class="col-md-3">Email</th>
                 
              </tr>
          </thead>
          <tbody>
              @foreach ($item as $item)
              <tr>
                  <td>{{ $item->name}}</td>
                  <td>{{ $item->email}}</td>
                  
              </tr>
              @endforeach
          </tbody>                    
      </table>
      </div>
    <div class="col-lg-8">
        <form action='{{ url('home/pengaturan/'.$data->id) }}' method='post'>
            @csrf
            @method('PUT')
               
                    <div class="mb-3 row justify-content-center">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name='name' value="{{$data->name}}"
                             id="name">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" name='email'value="{{$data->email}}" id="email">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name='password' id="password" required>
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="email" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
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