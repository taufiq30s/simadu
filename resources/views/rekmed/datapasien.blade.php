<!-- Add Button -->
<div class="row mt-3">
  <div class="col col-lg-4 col-4">
    <!-- Modal Data Pasien dan Data Penyakit-->
  @include('rekmed/pasienRegister')
    <!-- /Modal Data Pasien dan Data Penyakit-->

    <div class="text-left mb-3">
      <span class="ml-2"></span>
      <a href="" class="btn btn-success btn-rounded my-3" data-toggle="modal" data-target="#Modal_Input_Pasien">Tambah Data Pasien</a>
    </div>
  </div>

  <!-- Filter -->
  <div class="col col-lg-8 col-8 mt-3">
    <div class="row mr-2">
      <div class="col">
        <input type="text" name="txt_search" id="txt_search" placeholder="Nomor Pasien / NIK / Nomor KK / Nomor Map" class="form-control">
      </div>
      <div class="col">
        <select class="custom-select" id="kategoriPasien">
          <option selected value="all" id="caption">Tipe Pasien</option>
          <option value="all">Semua</option>
          <option value="umum">Umum</option>
          <option value="bpjs">BPJS</option>
        </select>
      </div>
    </div>
  </div>
</div>
</div>