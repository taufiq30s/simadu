<div class="modal fade bd-example-modal-lg" style="margin-left: 20%;" id="Modal_Edit_Pasien" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <form action="" id="pasienEdit" onkeypress="return event.keyCode != 13;">
        @csrf
        <!--Modal cascading tabs-->
        <div class="modal-tabs modal-tabs-centered">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 " role="tablist" id="Edit_Patient_Tab">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Add_Information_Patient" role="tab"><i class="fas fa-user mr-1"></i>
                Data Pasien</a>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="Add_Information_Patient" role="tabpanel">

              <!--Body-->
              <div class="modal-body mb-1">
                <div class="alert alert-danger " id="print-error-msg-edit" style="display:none">
                    <h5 style="font-weight:bold"><i class="fas fa-exclamation-circle"></i>    Error!</h5>
                  <ul id="error"></ul>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="container">
                      <!-- Nomor MAP -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="noMap">Nomor Map <span class="text-danger">*</span></label>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" id="noMap_edit" name="noMap" data-inputmask="'mask': ['M-999999']" data-mask required>
                          </div>
                          <div class="col">
                            <button type="button" class="btn btn-info" id="getNoKK">Ambil No KK</button>
                          </div>
                        </div>
                      </div>

                      <!-- Nomor KK -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="noKK">Nomor KK <span class="text-danger">*</span></label>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" id="noKK_edit" name="noKK" data-inputmask="'mask': ['9999-9999-9999-9999']" data-mask
                              required>
                          </div>
                          <div class="col">
                            <button type="button" class="btn btn-info" id="getNoMap">Ambil No Map</button>
                          </div>
                        </div>
                      </div>

                      <!-- Nama Kepala Keluarga -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="namaKK">Nama Kepala Keluarga <span class="text-danger">*</span></label>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" id="namaKK_edit" name="namaKK" disabled>
                          </div>
                        </div>
                        <div class="pakaiNamaKK form-check form-check-inline" style="display:none">
                          <input type="checkbox" class="form-check-input" name="pakeNamaKK" id="pakeNamaKK_edit">
                          <label for="pakeNamaKK" class="form-check-label" style="font-size:15px;"> Nama Pasien Sama Dengan Nama Kepala Keluarga</label>
                        </div>
                      </div>

                      <!-- Nomor NIK -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="noNIK">Nomor NIK <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="noNIK_edit" name="noNIK" data-inputmask="'mask': ['9999-9999-9999-9999']"
                          data-mask required>
                      </div>

                      <!-- Nomor BPJS -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="noBPJS">Nomor BPJS </label>
                        <input type="text" class="form-control" id="noBPJS_edit" name="noBPJS" data-inputmask="'mask': ['9999-9999-9999-9999']"
                          data-mask required>
                      </div>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="container">
                      <!-- Nama Lengkap -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="namaPasien">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" id="namaPasien_edit" class="form-control form-control validate" name="namaPasien" required>
                      </div>

                      <!-- Tempat dan Tanggal Lahir -->
                      <div class="row">
                        <!-- Tempat Lahir -->
                        <div class="col-5">
                          <div class="form-group">
                            <label data-error="wrong" data-success="right" for="tempatLahir">Tempat Lahir <span class="text-danger">*</span></label>
                            <input type="text" id="tempatLahir_edit" class="form-control form-control validate" name="tempatLahir" required>
                          </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-7">
                          <div class="form-group">
                            <label data-error="wrong" data-success="right" for="tanggalLahir">Tanggal Lahir <span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                              </div>
                              <input type="text" class="form-control" data-provide="datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" id="tanggalLahir_edit" name="tanggalLahir"
                                data-mask required>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Jenis Kelamin -->
                      <div class="row">
                        <div class="col-12">
                          <label>Jenis Kelamin <span class="text-danger">*</span></label>
                        </div>

                        <div class="col-6">
                          <div class="form-group">
                            <label class="font-weight-normal">  
                                <input type="radio" name="jenisKelamin_edit" class="minimal" id="jk_edit" value="Laki-Laki" required> Laki-laki
                              </label>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label class="font-weight-normal">
                                <input type="radio" name="jenisKelamin_edit" class="minimal" id="jk_edit" value="Perempuan" required> Perempuan
                              </label>
                          </div>
                        </div>
                      </div>

                      <!-- Nomor Handphone -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="noHP">Nomor Handphone </label>
                        <input type="text" class="form-control" id="noHP_edit" name="noHP" data-inputmask="'mask': ['9999-9999-9999', '+62899-9999-9999', '999-9999-9999', '9999-9999-999']"
                          data-mask required>
                      </div>

                      <!-- Riwayat Alergi -->
                      <div class="md-form form-sm">
                        <label data-error="wrong" data-success="right" for="riwayatAlergi">Riwayat Alergi (Opsional)</label>
                        <textarea name="riwayatAlergi" id="riwayatAlergi_edit" style="resize: none;" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center mt-4">
                  <input type="hidden" name="noPasien" id="noPasien" value="">
                  <button type="submit" class="btn btn-success" name="btn_finish_input_patient" id="editPasien">Simpan</button>
                  <button type="reset" class="btn btn-danger" style="margin-left:1.5rem" id="cancelPasien">Batalkan</button>
                </div>
              </div>
            </div>
            <!--/.Panel 7-->
          </div>
        </div>
      </form>
    </div>
    <!--/.Content-->
  </div>
</div>