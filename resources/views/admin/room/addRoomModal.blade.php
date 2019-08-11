<form action="" method="" role="form">
  <div class="modal fade" id="addRoomModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Ruangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Kode Obat atau Nama Obat bisa di pilih yang mana yg lebih memungkinkan digunakan -->
          <div class="form-group">
            <label for="namaRuangan">Nama Ruangan</label>
            <input type="text" class="form-control" name="namaRuangan" id="namaRuangan" placeholder="Nama Ruangan" value="">
          </div>
          <div class="form-group">
            <label for="ipKomRuangan">IP Komputer</label>
            <input type="text" class="form-control" name="ipKomRuangan" id="ipKomRuangan" placeholder="Ex : 127.0.0.1">
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
