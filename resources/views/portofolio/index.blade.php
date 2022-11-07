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
          <li class="nav-item">
            <a class="nav-link btn text-dark" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn text-dark" href="#about">About</a>
          </li>
          <li class="nav-item">
            <button class="nav-link btn text-light btn-dark" href="#services">Login Admin</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<section class="home" id="home">
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
          <p class="fs-5 text-muted">Sedang cari kost-kostan di sekitar Jepara? Inkayat Kost solusinya.</p>
          <p class="fs-5 text-muted">Kost murah dengan fasilitas lengkap lingkungan aman, nyaman, asri, dan tenang.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home">
  
</section>
    <!-- <div class="container mt-5">
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
      <br>
        <h1 style="rasputin" size="25">Peraturan</h1>
        <br>
        <pre style="now" size="19">
        1. Mempunyai Kartu Tanda Penduduk (KTP)/ Kartu Mahasiswa/Kartu Pelajar
           yang berlaku dan menyerahkan fotocopy kartu tersebut 2 lembar kepada pemilik kost.
        2. DILARANG membawa tamu laki-laki masuk ke dalam rumah kost.
        3. DILARANG KERAS melakukan tindakan asusila.
        4. DILARANG KERAS mengkonsumsi/memakai/menggunakan narkoba, minuman keras, serta barang-barang 
           berbahaya lainnya.
        5. Pastikan semua barang-barang berharga penghuni kost dijaga dengan baik oleh pemiliknya masing-masing, 
           jika terjadi kehilangan bukan menjadi tanggung jawab pemilik kost.
        6. Tidak diperkenankan saling mengganggu sesama penghuni kost dengan menyalakan/menghidupkan radio,
            televisi terlalu keras dan berbicara dengan sangat keras (berteriak).
        7. Penghuni kost wajib menjaga keamanan, kenyamanan, dan ketertiban serta kebersihan rumah kost
        8. Bagi seluruh penghuni yang membawa teman harap memberitahukan kepada pemilik kost semata-mata untuk menjaga keamanan, 
           kenyamananan, dan ketertiban bersama.
        9. Tamu penghuni kost yang menginap harap segera melaporkan kepada pemilik kost.
       10. Pintu pagar ditutup pukul 22.00 WIB dan apabila ada keperluan mendadak/mendesak harap segera memberitahukan kepada pemilik kost.
       </pre> -->
 
  

  @include('partials.kamar')
  @include('partials.kontak')

@endsectionphp