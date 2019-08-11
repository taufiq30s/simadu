<form action="" method="" role="form">
  <div class="modal fade" id="addUserModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Kode Obat atau Nama Obat bisa di pilih yang mana yg lebih memungkinkan digunakan -->
          <div class="form-group">
            <label for="nipUser">NIP</label>
            <input type="text" class="form-control" name="nipUser" id="nipUser" placeholder="Input NIP" value="">
          </div>
          <div class="form-group">
            <label for="namaUser">Nama Lengkap</label>
            <input type="text" class="form-control" name="namaUser" id="namaUser" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="usernameUser">Username</label>
            <input type="text" class="form-control" name="usernameUser" id="usernameUser" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="passUser">Password</label>
            <input type="text" class="form-control" name="passUser" id="passUser" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="repassUser">Ulangi Password</label>
            <input type="text" class="form-control" name="repassUser" id="repassUser" placeholder="Konfirmasi Password">
          </div>
          <div class="form-group">
            <label for="roleUser">Role</label>
            <select class="form-control" name="roleUser" id="roleUser">
              <option selected disabled hidden>Pilih Role User</option>
              <option value="">Admin</option>
              <option value="">Dokter</option>
              <option value="">Apoteker</option>
              <option value="">Rekam Medis</option>
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
