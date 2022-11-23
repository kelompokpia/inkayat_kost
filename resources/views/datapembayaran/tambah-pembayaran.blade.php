@extends('layout.admin')

@section('content')
<section class="mt-5">
    <div class="separator">
        <div class="row justify-content-center">
            <div class="col-8">
                <form>
                    <div class="mb-3">
                      <label for="kamar" class="form-label">Kamar</label>
                      <input type="text" class="form-control" id="kamar">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="tahun" maxlength="4" minlength="4">
                    </div>

                    <div class="row mb-3">
                        <div class="col-2"><label for="jan" class="form-label">Januari</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="jan">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="jul" class="form-label">Juli</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="jul">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="feb" class="form-label">Februari</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="feb">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="ags" class="form-label">Agustus</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="ags">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="mar" class="form-label">Maret</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="mar">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="sep" class="form-label">September</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="sep">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="apr" class="form-label">April</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="apr">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="okt" class="form-label">Oktober</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="okt">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="mei" class="form-label">Mei</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="mei">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="nov" class="form-label">November</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="nov">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"><label for="jun" class="form-label">Juni</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="jun">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                        <div class="col-2"><label for="des" class="form-label">Desember</label></div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="des">
                                <option selected></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum lunas">Belum Lunas</option>
                              </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection