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
      {{-- <div class="col-lg-2">
        <a class="text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
      </div> --}}
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card d-flex justify-content-center py-5 w-100 align-items-center" style="height: 50vh">
        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
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