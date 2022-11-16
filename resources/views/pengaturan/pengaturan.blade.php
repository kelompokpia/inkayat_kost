@extends('layout.template')

@section('pengaturan')
<nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top " style="background-color: #697631">
    <div class="container-fluid">
      <a class="navbar-brand text-black" href="#">ADMIN INKAYAT KOST</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li>
            <a class="nav-link btn text-light btn-dark mx-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></a>
          </li>
          <li>
            <a class="nav-link btn text-light btn-dark" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<section>
  <div class="offcanvas offcanvas-start" style="background-color: #697631" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu Admin</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul>
      <a href="" class="text-decoration-none btn btn-dark w-75">Home</a>
    </ul>
    <ul>
      <a href="" class="text-decoration-none btn btn-dark w-75">Pembayaran</a>
    </ul>
    <ul>
      <a href="" class="text-decoration-none btn btn-dark w-75">Data Kamar</a>
    </ul>
    <ul>
      <a href="" class="text-decoration-none btn btn-dark w-75">Pengaturan</a>
    </ul>
  </div>
</div>
</section>


@endsection