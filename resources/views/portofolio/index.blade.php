@extends('layout.template')
@section('konten');
<nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color: #dbd9a1">
    <div class="container">
      <a class="navbar-brand text-black" href="#">INKAYAT KOST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link btn text-dark" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn text-dark" href="#kamar">Kamar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn text-light btn-dark" href="{{ url('login') }}">Login Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<section class="home py-5" id="home">
  <div class="container-lg">
    <div class="row min-vh-100 align-items-center align-content-center">
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="home-img text-center">
          <img src="{{ asset('img/logo.jpg')}}" class="w-100" alt="">
        </div>
      </div>
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="home-text">
          <h1 class="fw-bold fs-3">WELCOME TO</h1>
          <h5 class="fw-bold fs-1">INKAYAT KOST</h5>
          <p class="fs-5 text-muted">Hai Sobat Kost...</p>
          <p class="fs-5 text-muted">Sedang mencari kost di daerah Jepara? dengan harga murah, fasilitas lengkap, lingkungan tenang, aman, nyaman, dan asri?</p>
          <p class="fs-5 text-muted">INKAYAT KOST SOLUSINYA.....!!!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home py-5">
  <div class="container-lg">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="section-title text-center">
              <h2 class="fw-bold mb-5">PERATURAN</h2>
          </div>
      </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="text-rules">
        <h6>1. Mempunyai Kartu Tanda Penduduk (KTP)/ Kartu Mahasiswa/Kartu Pelajar yang berlaku dan menyerahkan fotocopy kartu tersebut 2 lembar kepada pemilik kost.</h6>
        <h6>2. DILARANG membawa tamu laki-laki masuk ke dalam rumah kost.</h6>
        <h6>3. DILARANG KERAS melakukan tindakan asusila.</h6>
        <h6>4. DILARANG KERAS mengkonsumsi/memakai/menggunakan narkoba, minuman keras, serta barang-barang berbahaya lainnya.</h6>
        <h6>5. Pastikan semua barang-barang berharga penghuni kost dijaga dengan baik oleh pemiliknya masing-masing,jika terjadi kehilangan bukan menjadi tanggung jawab pemilik kost.</h6>
        <h6>6. Tidak diperkenankan saling mengganggu sesama penghuni kost dengan menyalakan/menghidupkan radio,televisi terlalu keras dan berbicara dengan sangat keras (berteriak).</h6>
        <h6>7. Penghuni kost wajib menjaga keamanan, kenyamanan, dan ketertiban serta kebersihan rumah kost</h6>
        <h6>8. Bagi seluruh penghuni yang membawa teman harap memberitahukan kepada pemilik kost semata-mata untuk menjaga keamanan,kenyamananan, dan ketertiban bersama.</h6>
        <h6>9. Tamu penghuni kost yang menginap harap segera melaporkan kepada pemilik kost.</h6>
        <h6>10. Pintu pagar ditutup pukul 22.00 WIB dan apabila ada keperluan mendadak/mendesak harap segera memberitahukan kepada pemilik kost.</h6>
      </div>
    </div>
  </div>
  </div>
</section>
 
  

  @include('partials.kamar')
  @include('partials.kontak')
  @include('partials.footer')

@endsection