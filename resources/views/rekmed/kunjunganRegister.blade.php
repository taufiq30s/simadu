<div class="modal fade bd-example-modal-lg" style="margin-left: 20%;" id="Modal_Input_Rekam_Medis" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <form action="" method="">
        <!--Modal cascading tabs-->
        <div class="modal-tabs modal-tabs-centered">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 " role="tablist" id="Input_Patient_Tab">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Add_Information_Patient" role="tab"><i class="fas fa-user mr-1"></i>
                Data Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Add_Information_Disease" role="tab"><i class="fas fa-user-plus mr-1"></i>
                Data Medis</a>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="Add_Information_Patient" role="tabpanel">

              <!--Body-->
              <div class="modal-body mb-1">
                <div class="col">
                  <div class="form-group">
                    <label data-error="wrong" data-success="right" for="cariData">Cari Data <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="cariData" id="cariData" placeholder="Silahkan masukkan No. Pasien/No. Map/ No. KK atau Nama Kepala Keluarga...">
                      <div class="input-group-append">
                        <button class="btn btn-info" type="button">
                          <i class="fa fa-search"></i>
                        </button>
                        <p style="padding-left:5px"></p>
                        <button class="btn btn-success" type="button"><i class="fa fa-qrcode"></i></button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-success" onclick="next_input_tab()" id="nextTab">Selanjutnya</button>
                </div>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>

            </div>
            <!--/.Panel 7-->

            <!--Panel 8-->
            <div class="tab-pane fade" id="Add_Information_Disease" role="tabpanel">

              <!--Body-->
              <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                    <div class="container">
                      <!-- Tanggal Diangosa -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="patient_birth_date">Tanggal Diagnosa</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                          </div>
                          {{--  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" id="date_diagnosis" name="date_diagnosis"
                            data-mask required>  --}}
                        </div>
                      </div>

                      <!-- Keluhan -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="complaint_patient">Keluhan</label>
                        <textarea name="complaint_patient" id="complaint_patient" rows="3" style="resize: none;" class="form-control"></textarea>
                      </div>

                      <!-- Pemeriksaan -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="checkup_patient">Pemeriksaan</label>
                        <textarea name="checkup_patient" id="checkup_patient" rows="3" style="resize: none;" class="form-control"></textarea>
                      </div>

                      <!-- Diagnosa ICD X -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="icdx_diagnosis_patient">Diagnosa ICD X</label>
                        <textarea name="icdx_diagnosis_patient" id="icdx_diagnosis_patient" rows="3" style="resize: none;" class="form-control"></textarea>
                      </div>

                      <div class="text-right mt-4">
                        <button class="btn btn-outline-primary" onclick="back_input_tab()">Kembali</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="container">
                      <!-- Dokter Pemeriksa -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="examining_docter">Dokter Pemeriksa</label>
                        <input type="text" class="form-control" id="examining_docter" name="examining_docter" value="Nama dari User" disabled>
                      </div>

                      <!-- Anjuran Dokter -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="advice_doctor">Anjuran Dokter</label>
                        <textarea name="advice_doctor" id="advice_doctor" rows="3" style="resize: none;" class="form-control"></textarea>
                      </div>

                      <!-- Pengobatan -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="treatment_patient">Pengobatan</label>
                        <textarea name="treatment_patient" id="treatment_patient" rows="3" style="resize: none;" class="form-control"></textarea>
                      </div>

                      <!-- Edukasi -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="education_patient">Edukasi</label>
                        <textarea name="education_patient" id="education_patient" rows="3" style="resize: none;" class="form-control"></textarea>
                      </div>

                      <div class="text-left mt-4">
                        <button type="submit" class="btn btn-success" name="btn_finish_input_patient">Selesai</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!--/.Panel 8-->
          </div>

        </div>
      </form>
    </div>
    <!--/.Content-->
  </div>
</div>