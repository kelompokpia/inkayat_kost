@extends('layout.template')
<section id="kamar" class="py-5">
    <div class="container-lg">
      <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="section-title text-center">
                <h2 class="fw-bold mt-4">KAMAR</h2>
            </div>
        </div>
      </div>
      <div class="row justify-content-center">
        @foreach ($kamar as $kamar)
        <div class="col-md-3 col-6">
            <div class="card">
              @if($kamar->gambar_kamar)
              <img src="img/{{ $kamar['gambar_kamar'] }}" class="card-img-top" alt="{{ $kamar["nama_kamar"] }}" title="{{ $kamar["nama_kamar"] }}">
              @elseif ($kamar->gambar_kamar==NULL)
              <img src="img/{{ $kamar['nama_kamar'] }}.jpeg" class="card-img-top" alt="{{ $kamar["nama_kamar"] }}" title="{{ $kamar["nama_kamar"] }}">
              @else
              <img src="{{ asset('img/logo.jpg')}}" alt="" class="w-25 h-25">
              @endif
              <div class="card-body">
                @if ($kamar->status_kamar=="Tersedia")
                <div class="{{ ($kamar["status_kamar"]==="Terisi") ? 'kamar-status-terisi': 'kamar-status' }}">{{ $kamar["status_kamar"] }} &#8226; IDR{{ $kamar["harga_kamar"] }}K</div>
                @else
                <div class="kamar-status-terisi">Terisi &#8226; IDR{{ $kamar["harga_kamar"] }}K</div>
                @endif
                <h5 class="card-title">Kamar {{ $kamar["nama_kamar"] }}</h5>
                <!-- <p class="card-text">{{ $kamar["deskripsi_kamar"] }}</p> -->
                @if ($kamar->status_kamar=="Tersedia")
                  <a href="https://wa.me/0895321638507?text=Apakah%20{{ $kamar["nama_kamar"] }}%20kosong?" class="btn" style="background-color: #AA8B56;" target="_blank" title="Pesan melalui Whatsapp">Pesan</a>
                @else
                <a href="https://wa.me/0895321638507?text=Apakah%20{{ $kamar["nama_kamar"] }}%20kosong?" class="btn disabled" style="background-color: #AA8B56;" target="_blank" title="Pesan melalui Whatsapp">Pesan</a>
                @endif
                {{-- Backup tombol wa asli --}}
                {{-- <a href="https://wa.me/0895321638507?text=Apakah%20{{ $kamar["nama_kamar"] }}%20kosong?" class="btn {{ ($kamar["status_kamar"]==="Terisi") ? 'disabled':'' }}" style="background-color: #AA8B56;" target="_blank" title="Pesan melalui Whatsapp">Pesan</a> --}}
              </div>
            </div>
        </div>
        @endforeach
      </div>
</section>