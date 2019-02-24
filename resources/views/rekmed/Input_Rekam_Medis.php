<div class="modal fade bd-example-modal-lg" style="margin-left: 20%;" id="Modal_Input_Rekam_Medis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <div class="row">
                  <div class="col-6">
                    <div class="container">
                      <!-- Kode Map -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="kk_patient">Kode Map <span class="text-danger">*</span></label>
                        <select class="form-control select2" name="kode_map" style="width: 100%;" id="">
			                    <option selected="selected" disabled>Kode Map</option>
			                    <option value="MP001">MP001</option>
			                    <option value="MP001">MP001</option>
			                    <option value="MP001">MP001</option>
			                    <option value="MP001">MP001</option>
			                    <option value="MP001">MP001</option>
			                    <option value="MP001">MP001</option>
			                  </select>
                      </div>

											<!-- Nomor Kartu Keluarga -->
											<div class="form-group">
                        <label data-error="wrong" data-success="right" for="kk_patient">Nomor Kartu Keluarga <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="kk_patient" name="kk_patient"
                           data-inputmask="'mask': ['9999-9999-9999-9999']" data-mask required disabled>
                      </div>

                      <!-- Nomor NIK -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="nik_patient">Nomor NIK <span class="text-danger">*</span></label>
                        <select class="form-control S2_nik_irm" name="" style="width: 100%;" id="">
			                    <option selected="selected" disabled>NIK</option>
			                    <option value="1207072209990001">1207072209990001</option>
			                    <option value="1207072209990001">1207072209990001</option>
			                    <option value="1207072209990001">1207072209990001</option>
			                    <option value="1207072209990001">1207072209990001</option>
			                    <option value="1207072209990001">1207072209990001</option>
			                    <option value="1207072209990001">1207072209990001</option>
			                  </select>
                      </div>

                      <!-- Nomor NIK -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="nik_patient">Nomor BPJS </label>
                        <input type="text" class="form-control" id="bpjs_patient" name="bpjs_patient"
                           data-inputmask="'mask': ['9999-9999-9999-9999']" data-mask required disabled>
                      </div>

                      <!-- Nama Lengkap -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="patient_name">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" id="patient_name" class="form-control form-control validate" name="patient_name" required disabled>
                      </div>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="container">
                      <!-- Tempat dan Tanggal Lahir -->
                      <div class="row">
                        <!-- Tempat Lahir -->
                        <div class="col-5">
                          <div class="form-group">
                            <label data-error="wrong" data-success="right" for="patient_birth_place">Tempat Lahir <span class="text-danger">*</span></label>
                            <input type="text" id="patient_birth_place" class="form-control form-control validate" name="patient_birth_place" required disabled>
                          </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-7">
                          <div class="form-group">
                            <label data-error="wrong" data-success="right" for="patient_birth_date">Tanggal Lahir <span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                              </div>
                              <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" id="patient_birth_date" name="patient_birth_date" data-mask required disabled>
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
                              <input type="radio" name="gender_patient" class="minimal" required disabled checked> Laki-laki
                            </label>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label class="font-weight-normal">
                              <input type="radio" name="gender_patient" class="minimal" required disabled> Perempuan
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- Alamat -->
                      <div class="md-form form-sm">
                        <label data-error="wrong" data-success="right" for="patient_name">Alamat <span class="text-danger">*</span></label>
                        <textarea name="patient_address" id="patient_address" style="resize: none;" class="form-control" rows="4" required disabled></textarea>
                      </div>

                      <!-- Nomor Handphone -->
                      <div class="form-group">
                        <label data-error="wrong" data-success="right" for="hp_patient">Nomor Handphone </label>
                        <input type="text" class="form-control" id="hp_patient" name="hp_patient"
                           data-inputmask="'mask': ['9999-9999-9999', '+62899-9999-9999', '999-9999-9999', '9999-9999-999']" data-mask required disabled>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-success" onclick="next_input_tab()">Selanjutnya</button>
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
                          <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" id="date_diagnosis" name="date_diagnosis" data-mask required>
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