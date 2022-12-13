@extends('layout.admin')
<?php
$link = $_SERVER['HTTP_REFERER'];
    $link_array = explode('/',$link);
    $lastChar = end($link_array);
?>
@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h1>Tambah Data Pembayaran Kos</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-md-11">
                <form method="post" action="/home/pembayaran">
                    @csrf
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              Informasi Pengekos
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row justify-content-between pb-3">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="id_kamar" class="form-label">Kamar</label>
                                            <select class="form-select" aria-label="Default select example" id="id_kamar" name="id_kamar" required @error('id_kamar')  @enderror aria-describedby="kamarHelp">
                                                <option selected></option>
                                                @foreach ($kamars as $kamar)
                                                    <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }} - {{ $kamar->nama_penghuni }}</option>
                                                @endforeach
                                              </select>
                                            @error('id_kamar')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="tahun" class="form-label">Tahun</label>
                                            <select class="form-select" aria-label="Default select example" id="tahun" name="tahun">
                                                <option></option>
                                                @foreach ($tahuns as $tahun)
                                                    <option value="{{ $tahun->tahun }}" {{ ($tahun->tahun===$lastChar)? 'selected':'' }}>{{ $tahun->tahun }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_kamar')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              Data Pembayaran
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="jan" class="form-label">Januari</label>
                                        <select class="form-select" aria-label="Default select example" name="jan" id="jan">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="feb" class="form-label">Februari</label>
                                        <select class="form-select" aria-label="Default select example" name="feb" id="feb">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mar" class="form-label">Maret</label>
                                        <select class="form-select" aria-label="Default select example" name="mar" id="mar">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="apr" class="form-label">April</label>
                                        <select class="form-select" aria-label="Default select example" name="apr" id="apr">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mei" class="form-label">Mei</label>
                                        <select class="form-select" aria-label="Default select example" name="mei" id="mei">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="jun" class="form-label">Juni</label>
                                        <select class="form-select" aria-label="Default select example" name="jun" id="jun">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="jul" class="form-label">Juli</label>
                                        <select class="form-select" aria-label="Default select example" name="jul" id="jul">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ags" class="form-label">Agustus</label>
                                        <select class="form-select" aria-label="Default select example" name="ags" id="ags">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="sep" class="form-label">September</label>
                                        <select class="form-select" aria-label="Default select example" name="sep" id="sep">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="okt" class="form-label">Oktober</label>
                                        <select class="form-select" aria-label="Default select example" name="okt" id="okt">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="nov" class="form-label">November</label>
                                        <select class="form-select" aria-label="Default select example" name="nov" id="nov">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="des" class="form-label">Desember</label>
                                        <select class="form-select" aria-label="Default select example" name="des" id="des">
                                            <option selected></option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum bayar">Belum bayar</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <br/><button type="submit" class="btn btn-primary" style="width: 90px">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection