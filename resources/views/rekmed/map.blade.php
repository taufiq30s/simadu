<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard Map Pasien</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/rekmed">Home</a></li>
          <li class="breadcrumb-item active">Dashboard Map Pasien</li>
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
    @include('rekmed/datamap')
    @include('rekmed/mapEdit')
    <div class="row">
      <div class="col-12">
        <div class="container">
          <table id="dt_map_dashboard" class="table table-striped">
            <thead>
              <tr class="text-center">
                <th>No. Map</th>
                <th>NO. KK</th>
                <th>Nama Kepala Keluarga</th>
                <th>Alamat</th>
                <th>Status Daerah</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody id="tMap">
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /container-fluid -->
</section>
<script>document.title = "Map Pasien | Dashboard";</script>