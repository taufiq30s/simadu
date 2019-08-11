<form action="" method="" role="form">
  <div class="modal fade" id="addDataObatModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Kode Obat atau Nama Obat bisa di pilih yang mana yg lebih memungkinkan digunakan -->
          <div class="form-group">
            <label for="">Kode Obat</label>
            <input type="text" class="form-control" name="kodeObat" id="kodeObat" value="O-0000?" disabled>
          </div>
          <div class="form-group">
            <label for="">Nama Obat</label>
            <input type="text" class="form-control" name="namaObat" id="namaObat" placeholder="Nama Obat">
          </div>
          <div class="form-group">
            <label for="jenisObat">Jenis Obat</label>
            <select class="form-control" name="jenisObat" id="jenisObat">
              <option selected disabled hidden>Pilih Jenis Obat</option>
              <option value="">Tablet</option>
              <option value="">Sirup</option>
              <option value="">Injeksi</option>
              <option value="">Saleb</option>
            </select>
          </div>
          <div class="form-group">
            <label for="satuanObat">Satuan Obat</label>
            <select class="form-control" name="satuanObat" id="satuanObat">
              <option selected disabled hidden>Pilih Satuan Obat</option>
              <option value="">Butir</option>
              <option value="">Botol</option>
              <option value="">Kotak</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="addDataObat()">Selesai</button>
        </div>
      </div>
    </div>
  </div>
</form>
