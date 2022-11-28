  <!-- Modal -->
  <div class="modal fade" id="tambahTahun" tabindex="-1" aria-labelledby="tambahTahunLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahTahunLabel">Tambah tahun</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="/home/pembayaran">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" maxlength="4" minlength="4" min="2000" required value="{{ old('tahun') }}" placeholder="Masukkan tahun..">
                @error('tahun')
              <div class="invalid-feed">
                {{ $message }}
              </div>
          @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" @error('tahun') is-invalid @enderror>Tambah</button>
        </div>
    </form>
      </div>
    </div>
  </div>