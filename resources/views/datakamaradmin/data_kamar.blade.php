@extends('layout.admin')

@section('content')
@if (Session::has('Success'))
    <div class="pt-3">
        <div class="alert alert-Success">
            {{Session::get('Success')}}
        </div>
    </div>
@endif
<section>
<div class="container">
    <div class="row justify-content-center mb-4">
                <div class="col-10 justify-content-center">
                <h1>Data kamar</h1>
                <form class="d-flex pb-3" action="{{ url('home/datakamar') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                  <div class="pb-3">
                  <a href='{{ url('home/datakamar/create') }}' class="btn btn-primary">+ Tambah Data</a>
                  </div>
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Kamar</th>
                            <th class="col-md-3">Nama</th>
                            <th class="col-md-4">NIK</th>
                            <th class="col-md-2">Alamat</th>
                            <th class="col-md-2">Telpon</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->nama_kamar}}</td>
                            <td>{{ $item->nama_penghuni}}</td>
                            <td>{{ $item->nik_penghuni}}</td>
                            <td>{{ $item->alamat}}</td>
                            <td>{{ $item->telepon_penghuni}}</td>
                            <td>
                                <a href='{{url('home/datakamar/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Ubah</a>
                                <form onsubmit="return confirm('Yakin ingin menghapus data?') "class ='d-inline' action="{{ url('home/datakamar/'.$item->nama_kamar)}}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger 
                                    btn-sm" >Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                    
                </table>
                {{$data->withQueryString()->links()}} 
                </div>     
            </div>
            </div>
        </div>
</section>
@endsection
