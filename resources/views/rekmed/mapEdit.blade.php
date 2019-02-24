<div class="modal fade bd-example-modal-lg" style="margin-left: 20%;" id="Modal_Edit_Map" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <form action="" id="mapRegist"
        @csrf
        <!--Modal cascading tabs-->
        <div class="modal-tabs modal-tabs-centered">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 " role="tablist" id="Input_Map_Tab">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Add_Information_Map" role="tab"><i class="fas fa-user mr-1"></i>
                Data Map</a>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="Add_Information_Map" role="tabpanel">

              <!--Body-->
              <div class="modal-body mb-1">
                <div class="alert alert-danger " id="print-error-msg-edit" style="display:none">
                    <h5 style="font-weight:bold"><i class="fas fa-exclamation-circle"></i>    Error!</h5>
                  <ul id="error"></ul>
                </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="container">

                        <!-- Nomor KK -->
                        <div class="form-group">
                          <label data-error="wrong" data-success="right" for="noKK">Nomor KK <span class="text-danger">*</span></label>
                          <div class="form-row">
                            <input type="text" class="form-control" id="noKK_edit" name="noKK" data-inputmask="'mask': ['9999-9999-9999-9999']" data-mask
                              required>
                          </div>
                        </div>

                        <!-- Nama Kepala Keluarga -->
                        <div class="form-group">
                          <label data-error="wrong" data-success="right" for="namaKK">Nama Kepala Keluarga <span class="text-danger">*</span></label>
                          <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" id="namaKK_edit" name="namaKK" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="container">
                        <!-- Alamat -->
                        <div class="form-group">
                          <label data-error="wrong" data-success="right" for="alamat">Alamat<span class="text-danger">*</span></label>
                          <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" id="alamat_edit" name="alamat" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="text-center mt-4">
                    <input type="hidden" name="noMap" id="noMap" value="">
                    <button type="submit" class="btn btn-success" name="btn_finish_input_map" id="editMap">Simpan</button>
                    <button type="reset" class="btn btn-danger" style="margin-left:1.5rem" id="cancel">Batalkan</button>
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