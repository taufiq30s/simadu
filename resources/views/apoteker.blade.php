@include('layouts/head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts/navbar')
        @include('layouts/sidenav')
        <div class="content-wrapper">
          @if ($view === 'dashboard')
            @include('apotek/dashboard')
          @elseif($view === 'antrian')
              @include('apotek/antrian')
          @elseif($view === 'inventory')
              @include('apotek/inventory')
          @elseif($view === 'obat')
              @include('apotek/obat')
          @endif
        </div>
@include('layouts/jQuery')
@include('layouts/footer')
@include('layouts/foot')
</body>
