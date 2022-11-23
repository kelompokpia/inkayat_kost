@extends('layout.admin')

@section('content')
<h1 class="h2">Edit Pembayaran</h1>
<section>
<form action='' method='post'>
        <div class="my-5 p-5 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kamar" class="col-sm-2 col-form-label">Kamar</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kamar' id="kamar">
                </div>
            </div>
            <div class="mb-3 row-5">
                <label for="kamar" class="col-sm-2 col-form-label">Tahun</label>
                <select id = "tahun">
                <option value="pilih-tahun">Pilih Tahun</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                </select>
            </div>
            <br>
            <h5>Bulan</h5>
            <br>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Januari</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Februari</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Maret</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">April</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Mei</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Juni</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Juli</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Agustus</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">September</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Oktober</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">November</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-3 row-3 col-5">
                <label for="keterangan" class="col-3">Desember</label>
                <select id="keterangan">
                    <option value="lunas">Lunas</option>
                    <option value="belum-lunas">Belum Lunas</option>
                </select>
            </div>

            <div class="mb-3 row">
                <label for="kamar" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>

@endsection
