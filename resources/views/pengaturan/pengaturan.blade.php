@extends('layout.admin')

@section('content')
{{-- <section class="py-4">
  <div class="container-lg py-5">
    <div class="div">

    </div>
    <div class="card d-flex justify-content-center py-5 w-100 align-items-center" style="height: 50vh">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</section> --}}

<section class="home py-5">
  <div class="container-lg py-5">
    <div class="row">
      <div class="col-lg-10">
        <h2 class="fw-bold mb-2">Data Admin</h2>
      </div>
      <div class="col-lg-2">
        <a class="text-decoration-none btn btn-dark  justify-content-center" href="{{ route('register') }}">{{ __('Register') }}</a>
      </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card d-flex justify-content-center py-5 w-100 align-items-center" style="height: 50vh">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

@endsection