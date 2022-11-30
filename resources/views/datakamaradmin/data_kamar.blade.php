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
        <div class="row">
            <div class="col-">
                <h1>Data Kamar Kost</h1>
            </div>
        </div>
        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('datakamar') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('datakamar/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
                <table class="table table-striped">
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
                                <a href='{{url('datakamar/'.$item->nama_kamar.'/edit') }}' class="btn btn-warning btn-sm">Ubah</a>
                                <form onsubmit="return confirm('Yakin ingin menghapus data?') "class ='d-inline' action="{{ url('datakamar/'.$item->nama_kamar)}}"
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
</section>
@endsection
