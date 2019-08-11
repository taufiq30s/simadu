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
              <h1 class="m-0 text-dark">Pengaturan</h1>
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
          <div class="row mt-3">
            <div class="col col-12">
              <form method="POST" onsubmit="return confirm('Anda yakin ingin menyimpan pengaturan ini?');" action="/admin/config/apply">
                  @csrf
                  <div class="form-group">
                      <ul class="nav nav-pills nav-fill" role="tablist">
                          <li class="nav-item active" role="presentation">
                              <a href="#general" class="nav-link active" role="tab" data-toggle="tab">Umum</a>
                          </li>
                          <li class="nav-item" role="presentation">
                              <a href="#database" class="nav-link" role="tab" data-toggle="tab">Database</a>
                          </li>
                          <li class="nav-item" role="presentation">
                              <a href="#develop" class="nav-link" role="tab" data-toggle="tab">Pengembangan</a>
                          </li>
                      </ul>

                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="general">
                              <div class="form-group row pt-3">
                                  <label for="namaPuskesmas" class="col-md-4 col-form-label text-md-right">{{ __('Nama Puskesmas') }}</label>

                                  <div class="col-md-6">
                                      <input id="namaPuskesmas" type="namaPuskesmas" class="form-control{{ $errors->has('namaPuskesmas') ? ' is-invalid' : '' }}" name="namaPuskesmas" value="{{ $errors->has('namaPuskesmas') ? old('namaPuskesmas') : $conf['INSTANCE_NAME'] }}" required>

                                      @if ($errors->has('namaPuskesmas'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('namaPuskesmas') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="alamatPuskesmas" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Puskesmas') }}</label>

                                  <div class="col-md-6">
                                      <input id="alamatPuskesmas" type="alamatPuskesmas" class="form-control{{ $errors->has('alamatPuskesmas') ? ' is-invalid' : '' }}" name="alamatPuskesmas" value="{{ $errors->has('alamatPuskesmas') ? old('alamatPuskesmas') : $conf['INSTANCE_ADDRESS'] }}" required>

                                      @if ($errors->has('alamatPuskesmas'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('alamatPuskesmas') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                          </div>



                          <div role="tabpanel" class="tab-pane" id="database">
                              <div class="alert alert-danger mt-2" role="alert">
                                  <b>PERINGATAN!</b> Mengubah pengaturan ini dapat menyebabkan web ini tidak dapat berfungsi.<br> Pastikan untuk mengubah atau menyesuaikan pengaturan ini sesuai dengan sistem database anda!
                              </div>
                              <div class="form-group row pt-1">
                                  <label for="dbHost" class="col-md-4 col-form-label text-md-right">{{ __('Database Host') }}</label>

                                  <div class="col-md-6">
                                      <input id="dbHost" type="dbHost" class="form-control{{ $errors->has('dbHost') ? ' is-invalid' : '' }}" name="dbHost" value="{{ $errors->has('dbHost') ? old('dbHost') : $conf['DB_HOST'] }}" required>

                                      @if ($errors->has('dbHost'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('dbHost') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="dbPort" class="col-md-4 col-form-label text-md-right">{{ __('Database Port') }}</label>

                                  <div class="col-md-6">
                                      <input id="dbPort" type="dbPort" class="form-control{{ $errors->has('dbPort') ? ' is-invalid' : '' }}" name="dbPort" value="{{ $errors->has('dbPort') ? old('dbPort') : $conf['DB_PORT'] }}" required>

                                      @if ($errors->has('dbPort'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('dbPort') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="dbUser" class="col-md-4 col-form-label text-md-right">{{ __('Database Username') }}</label>

                                  <div class="col-md-6">
                                      <input id="dbUser" type="dbUser" class="form-control{{ $errors->has('dbUser') ? ' is-invalid' : '' }}" name="dbUser" value="{{ $errors->has('dbUser') ? old('dbUser') : $conf['DB_USERNAME'] }}" required>

                                      @if ($errors->has('dbUser'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('dbUser') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="dbPass" class="col-md-4 col-form-label text-md-right">{{ __('Database Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="dbPass" type="password" class="form-control{{ $errors->has('dbPass') ? ' is-invalid' : '' }}" name="dbPass" value="{{ $errors->has('dbPass') ? old('dbPass') : $conf['DB_PASSWORD'] }}">

                                      @if ($errors->has('dbPass'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('dbPass') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="dbName" class="col-md-4 col-form-label text-md-right">{{ __('Database Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="dbName" type="dbName" class="form-control{{ $errors->has('dbName') ? ' is-invalid' : '' }}" name="dbName" value="{{ $errors->has('dbName') ? old('dbName') : $conf['DB_DATABASE'] }}" required>

                                      @if ($errors->has('dbName'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('dbName') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          @if (Auth::user()->username === 'admin')
                              <div role="tabpanel" class="tab-pane" id="develop">
                                  <div class="alert alert-warning mt-2" role="alert">
                                      <b>PERINGATAN!</b> Menu ini digunakan untuk keperluan debugging aplikasi.
                                  </div>
                                  <div class="form-check">
                                      <input type="checkbox" name="devMode" id="devMode" class="form-check-input" {{$conf['APP_DEBUG'] ? 'checked' : ''}}>
                                      <label for="devMode" class="form-check-label">Debug Mode</label>
                                  </div>
                              </div>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Simpan') }}
                          </button>
                          <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                      </div>
                  </div>
              </form>
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
