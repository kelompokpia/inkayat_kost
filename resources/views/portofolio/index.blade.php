@extends('layout.template');
@section('konten')
<nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color: #dbd9a1">
    <div class="container">
      <a class="navbar-brand text-black" href="#">INKAYAT KOST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-1">
            <a class="nav-link rounded text-white" style="background-color: #aa8b56" aria-current="page" href="#">Cari Kamar</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link rounded text-white" style="background-color: #aa8b56" href="#about">Kontak</a>
          </li>
          <li class="nav-item">
            <a type="button"  style="background-color: #aa8b56" class="rounded text-white btn btn-outline" href="#hobi">Login Admin</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container mt-5">
      <br>
      <h1 style="rasputin" size="25" align="center"><pre>   WELCOME TO</pre></h1>
      <h1 style="rasputin" size="37"align="center"><pre>       InkayatKost</pre></h1>
      <pre style="now" size="19"> 
                                                                  Hai Sobat Kost...
                                                                  Sedang cari kost-kostan di sekitar Jepara?
                                                                  Inkayat Kost solusinya.
  
                                                                  Kost murah dengan fasilitas lengkap. 
                                                                  Lingkungan aman, nyaman, asri, dan tenang.
      </pre>
  </nav>

  @include('partials.kamar')
  @include('partials.kontak')
@endsection