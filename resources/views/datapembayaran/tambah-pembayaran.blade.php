@extends('layout.admin')

@section('content')

<?php
$link = $_SERVER['HTTP_REFERER'];
    $link_array = explode('/',$link);
    echo $lastChar = end($link_array);
?>

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Tambah Data Pembayaran Kos</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="post" action="/home/pembayaran/tambah-pembayaran">
                    @csrf
                    <div class="row justify-content-between pb-3">
                        <div class="col-8">
                            <h5>Informasi</h5>
                        </div>
                    <div class="row justify-content-between pb-3">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="id_kamar" class="form-label">Kamar</label>
                                <select class="form-select" aria-label="Default select example" id="id_kamar" name="id_kamar">
                                    <option selected></option>
                                    @foreach ($kamars as $kamar)
                                        <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }} - {{ $kamar->nama_penghuni }}</option>
                                    @endforeach
                                  </select>
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <select class="form-select" aria-label="Default select example" id="tahun" name="tahun">
                                    <option></option>
                                    @foreach ($tahuns as $tahun)
                                        <option value="{{ $tahun->tahun }}" {{ ($tahun->tahun===$lastChar)? 'selected':'' }}>{{ $tahun->tahun }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2"><label for="jan" class="form-label">Januari</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="jan" id="jan">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="jul" class="form-label">Juli</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="jul" id="jul">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="feb" class="form-label">Februari</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="feb" id="feb">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="ags" class="form-label">Agustus</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="ags" id="ags">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="mar" class="form-label">Maret</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="mar" id="mar">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="sep" class="form-label">September</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="sep" id="sep">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="apr" class="form-label">April</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="apr" id="apr">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="okt" class="form-label">Oktober</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="okt" id="okt">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="mei" class="form-label">Mei</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="mei" id="mei">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="nov" class="form-label">November</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="nov" id="nov">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="jun" class="form-label">Juni</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="jun" id="jun">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="des" class="form-label">Desember</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="des" id="des">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum bayar">Belum bayar</option>
                              </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection