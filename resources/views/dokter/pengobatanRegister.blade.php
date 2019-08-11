<div class="modal fade bd-example-modal-lg" style="margin-left: 20%;" id="Modal_Input_Poli" tabindex="-1"
  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">
          Input Rekam Medis
        </h5>
      </div>
      <!--Body-->
      <div class="modal-body">
        <div class="col">
          <div class="form-group">
            <div id="pengobatanWizard" class="sw-main sw-theme-arrows">
              <ul class="nav nav-tabs step-anchor">
                <li class="nav-item active">
                  <a href="#step-1" class="nav-link">Langkah 1<br /><small>Konfirmasi Data Pasien</small></a>
                </li>
                <li class="nav-item">
                  <a href="#step-2" class="nav-link">Langkah 2<br /><small>Masukan Informasi Keluhan dan Poli
                      tujuan</small></a>
                </li>
                <li class="nav-item">
                  <a href="#step-3" class="nav-link">Langkah 3<br /><small>Konfirmasi Akhir</small></a>
                </li>
              </ul>

              <div class="sw-container tab-content">
                <div id="step-1" class="tab-pane step-content">
                  <h3>Data Pasien</h3>
                  <!-- <table class="table table-striped table-bordered" id="confirmPatient"> -->
                    <tbody>
                      <tr>
                        <td><b>Nomor Pasien</b></td>
                        <td>123456456123123</td>
                      </tr>
                      <tr>
                        <td><b>NIK</b></td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td><b>Nomor BPJS</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Nomor Map</b></td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td><b>Nomor Kartu Keluarga</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Nama Kepala Keluarga</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Alamat Pasien</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Status Lokasi Alamat Pasien</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Nama Lengkap Pasien</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Tempat Tanggal Lahir</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Usia Pasien</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Nomor Handphone</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><b>Riwayat Alergi</b></td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab,
                          doloremque. Esse odio itaque soluta laboriosam, omnis natus. Doloribus eius dignissimos
                          officia expedita ipsum deserunt aut dolores tenetur, dicta magni assumenda.</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col col-6 ml-auto">
                      <button class="btn btn-dark ml-auto">Lanjut</button>
                    </div>
                  </div>
                </div>
                <div id="step-2" class="tab-pane step-content">
                  <div class="row">
                    <div class="container">
                      <!-- Keluhan -->
                      <h2>Kesehatan</h2>
                      <!-- <form id="verifyKesehatan"> -->
                        <div class="form-group" id="verifyKesehatan">
                          <label data-error="wrong" data-success="right" for="keluhan">Keluhan</label>
                          <textarea name="keluhan" id="keluhan" rows="3" style="resize: none;" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                          <label for="poli_tujuan">Poli Tujuan</label>
                          <select name="poli" id="poliTujuan" class="form-control">
                            <option value="R-001" selected>Poli Pemeriksaan Umum</option>
                            <option value="R-002">Poli Gigi dan Mulut</option>
                            <option value="R-003">Poli Kesehatan Ibu dan Anak</option>
                          </select>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div id="step-3" class="tab-pane step-content">
                  <h3>Confirmasi Akhir</h3>
                  <!-- <table class="table table-striped table-bordered" id="lastConfirm"> -->
                    <tbody>
                      <tr>
                        <td><b>Nomor Pasien</b></td>
                        <td id="noPasien_lastConfirm">@mdo</td>
                      </tr>
                      <tr>
                        <td><b>Nomor Map</b></td>
                        <td id="noMap_lastConfirm">@mdo</td>
                      </tr>
                      <tr>
                        <td><b>Nama Pasien</b></td>
                        <td id="namaPasien_lastConfirm"></td>
                      </tr>
                      <tr>
                        <td><b>Usia Pasien</b></td>
                        <td id="usia_lastConfirm"></td>
                      </tr>
                      <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td id="jk_lastConfirm"></td>
                      </tr>
                      <tr>
                        <td><b>Keluhan</b></td>
                        <td id="keluhan_lastConfirm"></td>
                      </tr>
                      <tr>
                        <td><b>Poli Tujuan</b></td>
                        <td id="poli_lastConfirm"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Modal cascading tabs-->
      <div class="modal-tabs modal-tabs-centered">
        <!--Footer-->
        <div class="modal-footer">
          <button type="button" id="closePengobatanModal" class="btn btn-outline-danger waves-effect ml-auto"
            data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
