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
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>?</h3>

            <p>Dokter Hadir</p>
          </div>
          <div class="icon">
            <i class="fa fa-user-md fm"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Pengguna BPJS</p>
          </div>
          <div class="icon">
            <i class="far fa-id-card fm"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Rekaman Medis</p>
          </div>
          <div class="icon">
            <i class="fas fa-file-medical fm"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    
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
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody id="tMap">
              {{--  @foreach ($maps as $map)
                <tr>
                  <td>{{$map->NoMap}}</td>
                  <td>{{$map->NoKK}}</td>
                  <td>{{$map->NamaKepalaKeluarga}}</td>
                  <td>{{$map->Alamat}}</td>
                  <td>
                    <button class="btn btn-outline-warning btn-sm" data-toggle="popover" id="btn_edit_patient"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-outline-danger btn-sm" data-toggle="popover" id="btn_delete_patient"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
              @endforeach  --}}
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /container-fluid -->
</section>
<script>document.title = "Map Pasien | Dashboard";</script>