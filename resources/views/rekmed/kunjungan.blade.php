<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard Rekam Medis</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard Rekam Medis</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    @include('rekmed/rekmedStatistic')
    @include('rekmed/datakunjungan')

    <div class="row">
      <div class="col-12">
        <div class="container">
          <table id="dt_kunjungan_dashboard" class="table table-striped">
            <thead>
              <tr class="text-center">
                <th>No.Pasien</th>
                <th>No.Map</th>
                <th>No.Antrian</th>
                <th>NIK</th>
                <th>Nama Pasien</th>
                <th>Keluhan</th>
                <th>Poli/Ruangan Rujukan</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /container-fluid -->
</section>
<script>document.title = "Kunjungan Pasien | Dashboard";</script>