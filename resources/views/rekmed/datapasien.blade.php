    <!-- Add Button -->
    <div class="row mt-3">
      <div class="col col-lg-4 col-4">
        <!-- Modal Data Pasien dan Data Penyakit-->
        @include('rekmed/pasienRegister')
        <!-- /Modal Data Pasien dan Data Penyakit-->

        <div class="text-left mb-3">
          <span class="ml-2"></span>
          <a href="" class="btn btn-success btn-rounded my-3" data-toggle="modal" data-target="#Modal_Input_Patient">Tambah Data Pasien</a>
        </div>
      </div>

      <!-- Filter -->
      <div class="col col-lg-8 col-8 mt-3">
        <div class="row mr-2">
          <div class="col">
            <input type="text" name="txt_search_no_map" placeholder="Nomor MAP" class="form-control">
          </div>
          <div class="col">
            <input type="text" name="txt_search_no_kk" placeholder="Nomor KK" class="form-control">
          </div>
          <div class="col">
            <input type="text" name="txt_search_no_nik" placeholder="Nomor NIK" class="form-control">
          </div>
          <div class="col-1">
            <input type="submit" name="btn_cari" value="Cari" class="btn btn-outline-success">
          </div>
        </div>
      </div>
    </div>

