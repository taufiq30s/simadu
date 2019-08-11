@include('layouts/head')
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('layouts/navbar')
    @include('layouts/sidenav')
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <section class="content">
        <div class="container">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Jumlah User</span>
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
                  <span class="info-box-text">Rekam Medis</span>
                  <span class="info-box-number">93,139</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-success"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Dokter</span>
                  <span class="info-box-number">93,139</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-success"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Apoteker</span>
                  <span class="info-box-number">93,139</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
          <!-- /.row -->
          <div class="row mt-5">
            @include('admin/room/addRoomModal')
            <div class="col-12">
              <a href="add-ruangan" class="btn btn-primary">Tambah Ruangan</a>
              <button class="btn btn-success btn-rounded my-3" id="addObat" data-toggle="modal" data-target="#addRoomModals"><i class="fas fa-plus"></i> Tambah</button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col col-12">
              <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nama Ruangan</th>
                    <th scope="col">IP Computer</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rooms as $room)
                    <tr>
                      <td>{{$room->NamaRuangan}}</td>
                      <td>{{$room->ipComputer}}</td>
                      <td>
                        <a href="{{action('RoomController@edit', $room['KodeRuangan'])}}" class="btn btn-warning btn-sm">Edit</a>
                      </td>
                      <td>
                        <form class="delete" onsubmit="return confirm('Anda yakin ingin menghapus user ini?');" action="{{action('RoomController@destroy', $room['KodeRuangan'])}}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          <input class="btn btn-danger btn-sm" type="submit" value="Hapus">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
  @include('layouts/jQuery')
  @include('layouts/footer')
  @include('layouts/foot')
</body>
