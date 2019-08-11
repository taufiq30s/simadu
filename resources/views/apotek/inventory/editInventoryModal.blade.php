<form action="" method="" role="form">
  <div class="modal fade" id="editInventoryModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5 class="modal-title" id="exampleModalLabel">Edit Penambahan Stok Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Kode Obat atau Nama Obat bisa di pilih yang mana yg lebih memungkinkan digunakan -->
          <div class="form-group">
            <label for="kodeObat">Kode Obat</label>
            <input type="text" class="form-control" name="kodeObat" value="O-00000?" id="kodeObat" disabled>
          </div>
          <div class="form-group">
            <label for="namaObat">Nama Obat</label>
            <input type="text" class="form-control" name="namaObat" value="O-00000?" id="namaObat" disabled>
          </div>
          <div class="form-group">
            <label for="">Jumlah Stok Obat Masuk</label>
            <div class="input-group">
              <input type="number" class="form-control" id="jumlahTambahObat" name="jumlahTambahObat">
              <div class="input-group-append">
                <span class="input-group-text">Satuan</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Tanggal Expired</label>
            <div class="input-group date" id="expiredTambahObat" data-target-input="nearest" name="expiredTambahObat">
              <input type="date" class="form-control datetimepicker-input" data-target="#expiredTambahObat" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
              <div class="input-group-append" data-target="#expiredTambahObat" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnFinishEditInventory">Selesai</button>
        </div>
      </div>
    </div>
  </div>
</form>
