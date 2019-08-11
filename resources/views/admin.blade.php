@include('layouts/head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts/navbar')
        @include('layouts/sidenav')
        <div class="content-wrapper">
            @include('apotek/dashboard')
        </div>
@include('layouts/jQuery')
@include('layouts/footer')
@include('layouts/foot')
</body>
