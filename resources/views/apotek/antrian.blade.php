<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Antrian Apotek</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Apotek</li>
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
            <span class="info-box-text">Pengunjung Hari Ini</span>
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
            <span class="info-box-text">Antrian Saat Ini</span>
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
            <span class="info-box-text">Antrian Selanjutnya</span>
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
            <span class="info-box-text">Sisa Antrian</span>
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
            @include('/apotek/antrian/detailAntrianModal')
            <!-- @include('dokter/tes') -->
            <!-- /Modal Data Pasien dan Data Penyakit-->

            <div class="text-left mb-3">
              <span class="ml-2"></span>

              <!-- <a href="" class="btn btn-success btn-rounded my-3" data-toggle="modal" data-target="#Modal_Input_Pasien">Tambah Data Pasien</a> -->
              <button class="btn btn-primary btn-rounded my-3" onclick="Panggil()" id="CallPrev" data-toggle="modal"><i class="fas fa-arrow-circle-left"></i> Sebelumnya</button>
              <button class="btn btn-success btn-rounded my-3" onclick="Panggil()" id="CallNext" data-toggle="modal">Selanjutnya <i class="fas fa-arrow-circle-right"></i></button>
              <button class="btn btn-Warning btn-rounded my-3" onclick="PanggilUlang()" id="Recall" data-toggle="modal">Panggil Ulang <i class="fas fa-sync ml-1"></i></button>
            </div>
          </div>

          <!-- Filter -->
          <div class="col col-lg-4 col-4 mt-3 ml-auto">
            <div class="row">
              <div class="col">
                <input type="text" name="txt_search" id="txt_search" placeholder="Nomor Antrian / NIK / Nama Pasien / Keluhan" class="form-control">
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
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" class="text-center">No. Antrian</th>
              <th scope="col">Nomor Pasien</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col" class="text-center">BPJS</th>
              <th scope="col">Diagnosa</th>
              <th scope="col" class="text-center">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="text-center">1</th>
              <td>P-0000001</td>
              <td>Siminim</td>
              <td class="text-center"><i class="fas fa-times text-danger"></i></td>
              <td>Sakit Perut, Kepala pusing, Mual....</td>
              <td class="text-center">
                <button class="btn btn-primary btn-sm" onclick="ShowModals()"><i class="fas fa-info-circle"></i> Detail</button>
                <button class="btn btn-Danger btn-sm" onclick="PanggilDarurat()"><i class="fas fa-exclamation-triangle"></i> Panggil</button>
              </td>
            </tr>
            <tr class="row-active">
              <th scope="row" class="text-center">1</th>
              <td>P-0000002</td>
              <td>Siminim</td>
              <td class="text-center"><i class="fas fa-check text-success"></i></td>
              <td>Sakit Perut, Kepala pusing, Mual....</td>
              <td class="text-center">
                <button class="btn btn-primary btn-sm" onclick="ShowModals()"><i class="fas fa-info-circle"></i> Detail</button>
                <button class="btn btn-Danger btn-sm" onclick="PanggilDarurat()"><i class="fas fa-exclamation-triangle"></i> Panggil</button>
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center">1</th>
              <td>P-0000003</td>
              <td>Siminim</td>
              <td class="text-center"><i class="fas fa-times text-danger"></i></td>
              <td>Sakit Perut, Kepala pusing, Mual....</td>
              <td class="text-center">
                <button class="btn btn-primary btn-sm" onclick="ShowModals()"><i class="fas fa-info-circle"></i> Detail</button>
                <button class="btn btn-Danger btn-sm" onclick="PanggilDarurat()"><i class="fas fa-exclamation-triangle"></i> Panggil</button>
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
var callCount = 0;
var callMax = 4;

function funcPanggil(nama, sebutan){
  var willCall;
  swal({
    title: "Konfirmasi Panggil",
    text: "Apakah " + sebutan + " " + nama + " Sudah Datang?",
    icon: "info",
    buttons: ['Belum', 'Sudah'],
    allowOutsideClick: false,
    html: true
  }).then((willCall) => {
      if (willCall) {
        callCount = 0;
        ShowModals();
      } else {
        if(callCount <= callMax){
          swal("Silahkan Lakukan Panggilan Ulang!");
          callCount += 1;
        }
      }
  });
}

function Panggil(nomorAntrian = null) {
  var tryCall = false;
  if(callCount >= callMax || callCount == 0){
    funcPanggil('Sanji', 'Bapak');
  }
  else {
    swal({
      title : "Konfirmasi Panggilan",
      text  : "Batas panggil ulang belum habis, apakah ingin melanjutkan antrian?",
      icon  : "warning",
      buttons :['Panggil Ulang', 'Lanjutkan'],
      allowOutsideClick : false
    }).then((tryCall) => {
      callCount = 0;
      funcPanggil('Sanji', 'Bapak');
    });
  }
}
function PanggilUlang(nomorAntrian = null){
  if(callCount < callMax){
    funcPanggil('Sanji', 'Bapak');
  } else {
    swal("Batas panggil ulang telah habis, silahkan panggil pasien berikutnya!");
  }
}
function PanggilDarurat(){
  swal({
    title: "Konfirmasi Panggil Darurat",
    text : "Apakah yakin ingin memanggil pasien ***** secara darurat?",
    icon : "error",
    buttons : ["Batal", "Panggil"],
    dangerMode : true
  }).then((darurat) => {
    Panggil();
  })
}


function ShowModals(){
  $('#detailAntrianModals').modal('show');
}
function editInvObat(namaObat){
  swal({
    title : "Konfirmasi Perubahan",
    text : "Apakah anda ingin mengedit obat "+namaObat+"?",
    icon : "warning",
    buttons : [true, true],
  }).then((willUpdate) => {
    $('#editInventoryModals').modal('show');
    //Statement Update
    $('#btnFinishEditInventory').on('click', function(){
      swal({
        title : "Mengedit Data",
        text : "Data berhasil diubah.",
        icon : "success"
      })
    })
  });
}
function hapusInvObat(namaObat){

  swal({
    title : "Konfirmasi Penghapusan",
    text : "Apakah anda ingin menghapus obat "+namaObat+"?",
    icon : "error",
    dangerMode : true,
    buttons : [true, true],
  }).then((willDel) => {
      //Statement Hapus
      swal({
        title : "Menghapus Data",
        text : "Data telah terhapus.",
        icon : "success"
      })
  });
}
</script>
