<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard Pasien</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard Pasien</li>
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
    @include('rekmed/datapasien')
    @include('rekmed/pasienEdit')
    @include('rekmed/pasienView')
    <div class="row">
      <div class="col-12">
        <div class="container">
          <table id="dt_pasien_dashboard" class="table table-striped">
            <thead>
              <tr class="text-center">
                <th>No. Pasien</th>
                <th>No. Map</th>
                <th>NIK</th>
                <th>NO. KK</th>
                <th>Nama Pasien</th>
                <th>BPJS</th>
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
<script>document.title = "Data Pasien | Dashboard";</script>
