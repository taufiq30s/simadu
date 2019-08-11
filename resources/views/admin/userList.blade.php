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
            @include('admin/users/addUsersModal')
            <div class="col-12">
              <a href="new-user" class="btn btn-primary">Add User</a>
              <button class="btn btn-success btn-rounded my-3" id="addObat" data-toggle="modal" data-target="#addUserModals"><i class="fas fa-plus"></i> Tambah</button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col col-12">
              <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Bagian</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      @if ($user->role === 'admin' || $user->role === 'rekam_medis')
                        <td>
                          @if ($user->staff->NIP_Staff === "")
                              -
                          @else
                              {{$user->staff->NIP_Staff}}
                          @endif
                        </td>
                        <td>{{$user->staff->NamaStaff}}</td>
                      @elseif($user->role === 'dokter')
                        <td>{{$user->dokter->NIP_Dokter}}</td>
                        <td>{{$user->dokter->NamaDokter}}</td>
                        {{--  <td>nip dokter</td>
                        <td>nama dokter</td>  --}}
                      @else
                        <td>{{$user->apoteker->NIP_Apoteker}}</td>
                        <td>{{$user->apoteker->NamaApoteker}}</td>
                      @endif
                        <td>{{$user->username}}</td>
                        <td>
                          @if ($user->role === 'admin')
                            Administator
                          @elseif($user->role === 'dokter')
                            Dokter
                          @elseif($user->role === 'rekam_medis')
                            Rekam Medis
                          @elseif($user->role === 'apoteker')
                            Apoteker
                          @endif
                        </td>
                      <td>
                        <a href="{{action('UsersController@editByAdmin', $user['username'])}}" class="btn btn-warning btn-sm mr-2"><i class="fas fa-edit"></i> Edit</a>
                        <form class="delete" onsubmit="return confirm('Anda yakin ingin menghapus user ini?');" action="{{action('UsersController@destroy', $user['username'])}}" method="post" style="margin:0;display:inline-block;">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          @if ($user->username === 'admin' || $user->username === $userNow)
                            <button class="btn btn-danger btn-sm" type="submit" value="Hapus" disabled><i class="fas fa-trash"></i> Hapus</button>
                          @else
                            <button class="btn btn-danger btn-sm" type="submit" value="Hapus"><i class="fas fa-trash"></i> Hapus</button>
                          @endif
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
