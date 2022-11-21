@extends('layout.admin')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Data Pembayaran Kost</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-2">
          <div class="col-11">
            <select class="form-select" name="links" onchange="window.location.href=this.value;" aria-label="Default select example">
              <option selected>Pilih Tahun...</option>
              @foreach ($tahuns as $tahun)
                <option value="/pembayaran/{{ $tahun->slug }}">{{ $tahun->tahun }}</option>
              @endforeach
            </select>
          </div>
        </div>
    </div>
</section>
@endsection