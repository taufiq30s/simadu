@include('layouts/head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts/navbar')
        @include('rekmed/sidenav')
        <div class="content-wrapper">
            @if ($view === 'dashboard')
                @include('rekmed/dashboard')
            @elseif($view === 'pasien')
                @include('rekmed/pasien')
            @elseif($view === 'kunjungan')
                @include('rekmed/kunjungan')
            @elseif($view === 'map')
                @include('rekmed/map')
            @endif
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('layouts/jQuery')
    @include('layouts/footer')
    @include('layouts/foot')  
    @if($view === 'map')
        @include('rekmed/fetchMap');
    @elseif($view === 'pasien')
        @include('rekmed/fetchPasien');
    @else
        </script>
    @endif  
</body>