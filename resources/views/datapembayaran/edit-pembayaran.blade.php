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
            <div class="col-11">
                <h1>Edit Data Pembayaran Kos</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-11">
                <form method="post" action="/home/pembayaran/{{ $pembayaran->id }}">
                    @method('put')
                    @csrf
                    <div class="row justify-content-between pb-3">
                        <div class="col-8">
                            <h5>Informasi</h5>
                        </div>
                        <input type="hidden" value="{{ $pembayaran->id }}">
                    <div class="row justify-content-between pb-3">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="id_kamar" class="form-label">Kamar</label>
                                <select class="form-select" disabled aria-label="Default select example" id="id_kamar" name="id_kamar"  required @error('id_kamar') is-invalid @enderror>
                                    <option selected></option>
                                    @foreach ($kamars as $kamar)
                                        <option value="{{ $kamar->id }}" {{ ($pembayaran->id_kamar == $kamar->id)? 'selected':' ' }} >{{ $kamar->nama_kamar }} - {{ $kamar->nama_penghuni }}</option>
                                    @endforeach
                                </select>
                                @error('id_kamar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <select class="form-select" disabled aria-label="Default select example" id="tahun" name="tahun" @error('tahun') is-invalid @enderror>
                                    <option></option>
                                    @foreach ($tahuns as $tahun)
                                        <option value="{{ $tahun->tahun }}" {{ ($tahun->tahun===$lastChar)? 'selected':'' }}>{{ $tahun->tahun }}</option>
                                    @endforeach
                                  </select>
                                  @error('tahun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="jan" class="form-label">Januari</label>
                            <select class="form-select" aria-label="Default select example" name="jan" id="jan" value="{{ old('jan', $pembayaran->jan) }}" @error('jan') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->jan=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar"{{ ($pembayaran->jan=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('jan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="jul" class="form-label">Juli</label>
                            <select class="form-select" aria-label="Default select example" name="jul" id="jul" value="{{ old('jul', $pembayaran->jul) }}" @error('jul') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->jul=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->jul=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('jul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="feb" class="form-label">Februari</label>
                            <select class="form-select" aria-label="Default select example" name="feb" id="feb" value="{{ old('feb', $pembayaran->feb) }}" @error('feb') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->feb=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->feb=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('feb')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="ags" class="form-label">Agustus</label>
                            <select class="form-select" aria-label="Default select example" name="ags" id="ags" value="{{ old('ags', $pembayaran->ags) }}" @error('ags') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->ags=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->ags=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('ags')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="mar" class="form-label">Maret</label>
                            <select class="form-select" aria-label="Default select example" name="mar" id="mar" value="{{ old('mar', $pembayaran->mar) }} @error('mar') is-invalid @enderror">
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->mar=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->mar=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('mar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="sep" class="form-label">September</label>
                            <select class="form-select" aria-label="Default select example" name="sep" id="sep" value="{{ old('sep', $pembayaran->sep) }}" @error('sep') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->sep=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->sep=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('sep')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="apr" class="form-label">April</label>
                            <select class="form-select" aria-label="Default select example" name="apr" id="apr" value="{{ old('apr', $pembayaran->apr) }}" @error('apr') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->apr=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->apr=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('apr')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="okt" class="form-label">Oktober</label>
                            <select class="form-select" aria-label="Default select example" name="okt" id="okt" value="{{ old('okt', $pembayaran->okt) }}" @error('okt') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->okt=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->okt=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('okt')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="mei" class="form-label">Mei</label>
                            <select class="form-select" aria-label="Default select example" name="mei" id="mei" value="{{ old('mei', $pembayaran->mei) }}" @error('mei') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->mei=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->mei=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('mei')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="nov" class="form-label">November</label>
                            <select class="form-select" aria-label="Default select example" name="nov" id="nov" value="{{ old('nov', $pembayaran->nov) }}" @error('nov') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->nov=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->nov=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('nov')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="jun" class="form-label">Juni</label>
                            <select class="form-select" aria-label="Default select example" name="jun" id="jun" value="{{ old('jun', $pembayaran->jun) }}" @error('jun') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->jun=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->jun=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('jun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="des" class="form-label">Desember</label>
                            <select class="form-select" aria-label="Default select example" name="des" id="des" value="{{ old('des', $pembayaran->des) }}" @error('des') is-invalid @enderror>
                                <option selected></option>
                                <option value="Lunas" {{ ($pembayaran->des=='Lunas')? 'selected': ' ' }}>Lunas</option>
                                <option value="Belum bayar" {{ ($pembayaran->des=='Belum bayar')? 'selected': ' ' }}>Belum bayar</option>
                              </select>
                              @error('des')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection