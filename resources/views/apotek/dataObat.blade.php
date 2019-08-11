<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Obat</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Data Obat</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-success"><i class="fas fa-diagnoses"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Pengeluaran Hari Ini</span>
            <span class="info-box-number">93,139</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-success"><i class="fa fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jenis Obat</span>
            <span class="info-box-number">93,139</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-success"><i class="fas fa-chevron-circle-right"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Stok Tersedia</span>
            <span class="info-box-number">93,139</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Obat Habis</span>
            <span class="info-box-number">93,139</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>
    <!-- /.row -->

    <!-- Row Control -->
    <div class="row mt-3">
      <div class="col col-md-11 col-lg-11 m-auto">
        <div class="row">
          <div class="col col-lg-6">
            <!-- Modal Data Pasien dan Data Penyakit-->

            <div class="text-left mb-3">
              <span class="ml-2"></span>
              @include('/apotek/dataObat/addDataObatModal')
              @include('/apotek/dataObat/editDataObatModal')
              @include('/apotek/dataObat/detailDataObatModal')
              <!-- <a href="" class="btn btn-success btn-rounded my-3" data-toggle="modal" data-target="#Modal_Input_Pasien">Tambah Data Pasien</a> -->
              <button class="btn btn-success btn-rounded my-3" id="addObat" data-toggle="modal" data-target="#addDataObatModals"><i class="fas fa-plus"></i> Tambah</button>
            </div>
          </div>

          <!-- Filter -->
          <div class="col col-lg-4 col-4 mt-3 ml-auto">
            <div class="row">
              <div class="col">
                <input type="text" name="txt_search" id="txt_search" placeholder="Kode Obat / Nama Obat / Jenis Obat" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- End Row Control -->

    <!-- Row Information -->
    <div class="row">
      <div class="col col-11 m-auto">
        <table class="table table-striped table-hover" id="tblInventoryObat">
          <thead>
            <tr>
              <th scope="col" class="text-center">Kode Obat</th>
              <th scope="col">Nama Obat</th>
              <th scope="col">Jenis Obat</th>
              <th scope="col">Stok</th>
              <th scope="col" class="text-center">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>O001</td>
              <td>[Nama Obat]</td>
              <td>[jenis obat]</td>
              <td>[Jumlah Stok] [Satuan]</td>
              <td class="text-center">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailDataObatModals"><i class="fas fa-info-circle"></i> Detail</button>
                <button class="btn btn-warning btn-sm" onclick="editDataObat('Vitacimin')"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger btn-sm" onclick="hapusDataObat('Vitacimin')"><i class="fas fa-trash"></i> Hapus</button>
              </td>
            </tr>
            <tr>
              <td>O002</td>
              <td>Bodrex</td>
              <td>Tablet</td>
              <td>250 Butir</td>
              <td class="text-center">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailDataObatModals"><i class="fas fa-info-circle"></i> Detail</button>
                <button class="btn btn-warning btn-sm" onclick="editDataObat('Vitacimin')"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger btn-sm" onclick="hapusDataObat('Vitacimin')"><i class="fas fa-trash"></i> Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- End Row Information -->
  </div>
  <!-- /.container-fluid -->
</section>
<script type="text/javascript">

  function addDataObat(){
    swal({
      title : "Tambah Data",
      text : "Data berhasil ditambah.",
      icon : "success"
    })
  }

  function editDataObat(namaObat){
    swal({
      title : "Konfirmasi Perubahan",
      text : "Apakah anda ingin mengedit obat "+namaObat+"?",
      icon : "warning",
      buttons : [true, true],
    }).then((willUpdate) => {
      $('#editDataObatModals').modal('show');
      //Statement Update
      $('#btnFinishEdit').on('click', function(){
        swal({
          title : "Mengedit Data",
          text : "Data berhasil diubah.",
          icon : "success"
        })
      })
    });
  }
  function hapusDataObat(namaObat){
    swal({
      title : "Konfirmasi Penghapusan",
      text : "Apakah anda ingin menghapus obat "+namaObat+"?",
      icon : "error",
      dangerMode : true,
      buttons : [true, true]
    }).then((willDel) => {

        //Statement Hapus
        swal({
          title : "Menghapus Data",
          text : "Data telah terhapus.",
          icon : "success"
        })
    });
  }


  // function() {
  //   document.getElementById("namaObat").autofocus;
  // }

</script>
