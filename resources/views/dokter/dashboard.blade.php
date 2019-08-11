<style media="screen">
  .row-active{
    background: #9ED1BC;
  }
</style>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Poli [Nama Poli]</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Poli</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>?</h3>

            <p>Pasien Hari Ini</p>
          </div>
          <div class="icon">
            <i class="fas fa-diagnoses fm"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>?</h3>

            <p>Antrian Saat Ini</p>
          </div>
          <div class="icon">
            <i class="fa fa-list-alt fm"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Antrian Selanjutnya</p>
          </div>
          <div class="icon">
            <i class="fas fa-chevron-circle-right fm"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Jumlah Antrian</p>
          </div>
          <div class="icon">
            <i class="fas fa-clipboard-list fm"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- Row Control -->
    <div class="row mt-3">
      <div class="col col-md-11 col-lg-11 m-auto">
        <div class="row">
          <div class="col col-lg-6">
            <!-- Modal Data Pasien dan Data Penyakit-->
            @include('dokter/pengobatanRegister')
            <!-- @include('dokter/tes') -->
            <!-- /Modal Data Pasien dan Data Penyakit-->

            <div class="text-left mb-3">
              <span class="ml-2"></span>

              <!-- <a href="" class="btn btn-success btn-rounded my-3" data-toggle="modal" data-target="#Modal_Input_Pasien">Tambah Data Pasien</a> -->
              <button class="btn btn-primary btn-rounded my-3" onclick="Panggil()" id="CallPrev addPengobatan" data-toggle="modal"><i class="fas fa-arrow-circle-left"></i> Sebelumnya</button>
              <button class="btn btn-success btn-rounded my-3" onclick="Panggil()" id="CallNext addPengobatan" data-toggle="modal">Selanjutnya <i class="fas fa-arrow-circle-right"></i></button>
              <button class="btn btn-Warning btn-rounded my-3" onclick="PanggilUlang()" id="Recall addPengobatan" data-toggle="modal">Panggil Ulang <i class="fas fa-sync ml-1"></i></button>
            </div>
          </div>

          <!-- Filter -->
          <div class="col col-lg-4 col-4 mt-3 ml-auto">
            <div class="row">
              <div class="col">
                <input type="text" name="txt_search" id="txt_search" placeholder="Nomor Pasien / NIK / Nomor KK / Nomor Map" class="form-control">
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
              <th scope="col">NIK</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col" class="text-center">BPJS</th>
              <th scope="col">Keluhan</th>
              <th scope="col" class="text-center">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="text-center">1</th>
              <td>123456456123123</td>
              <td>Siminim</td>
              <td class="text-center"><i class="fas fa-times text-danger"></i></td>
              <td>Sakit Perut, Kepala pusing, Mual....</td>
              <td class="text-center">
                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                <a href="" class="btn btn-Danger btn-sm"><i class="fas fa-exclamation-triangle"></i> Panggil</a>
              </td>
            </tr>
            <tr class="row-active">
              <th scope="row" class="text-center">1</th>
              <td>123456456123123</td>
              <td>Siminim</td>
              <td class="text-center"><i class="fas fa-check text-success"></i></td>
              <td>Sakit Perut, Kepala pusing, Mual....</td>
              <td class="text-center">
                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                <a href="" class="btn btn-Danger btn-sm"><i class="fas fa-exclamation-triangle"></i> Panggil</a>
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center">1</th>
              <td>123456456123123</td>
              <td>Siminim</td>
              <td class="text-center"><i class="fas fa-times text-danger"></i></td>
              <td>Sakit Perut, Kepala pusing, Mual....</td>
              <td class="text-center">
                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                <a href="" class="btn btn-Danger btn-sm"><i class="fas fa-exclamation-triangle"></i> Panggil</a>
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
<!-- /.content -->
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


function ShowModals(){
  $('#Modal_Input_Poli').modal('show');
}

</script>
