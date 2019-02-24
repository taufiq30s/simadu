<aside class="main-sidebar elevation-4 sidebar-light-success">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link bg-success">
    <div class="brand-image img-circle elevation-3" style="margin-top:2px;"> <i class="fas fa-plus"></i> </div>
    <span class="brand-text font-weight-light" style="overflow-wrap:break-word">Sistem Informasi Puskesmas Terpadu</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          @php($role = Auth::user()->role)
          @if ($role === 'rekam_medis')
            {{Auth::User()->staff->NamaStaff}}
          @elseif($role === 'dokter')
            {{Auth::user()->dokter->NamaDokter}}
          @elseif($role === 'apoteker')
            {{Auth::user()->apoteker->NamaApoteker}}              
          @endif
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="Assets/pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <span class="right badge badge-danger">Beta</span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/rekmed/kunjungan" class="nav-link">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
              Rekam Medis
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/rekmed/pasien" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>
              Pasien
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/rekmed/map" class="nav-link">
            <i class="nav-icon far fa-folder-open"></i>
            <p>
              Map
            </p>
          </a>
        </li>

        <li class="nav-header">EXAMPLES</li>

        <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs" class="nav-link">
            <i class="nav-icon fa fa-file"></i>
            <p>Documentation</p>
          </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-angle-right fa-sm text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-angle-right fa-sm text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-angle-right fa-sm text-info"></i>
            <p>Informational</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>