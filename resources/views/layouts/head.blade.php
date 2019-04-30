<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @php($role = Auth::user()->role)
  <title>
    @if ($role === 'rekam_medis')
      Rekam Medis
    @elseif($role === 'dokter')
      Dokter
    @else if($role === 'apoteker')
      Apoteker
    @endif
    | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/font-awesome/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?v=1.0">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/dist/css/adminlte.min.css?v=1.0')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/iCheck/all.css?v=1.0')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/morris/morris.css?v=1.0')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css?v=1.0')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/datepicker/datepicker3.css?v=1.0')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css?v=1.0')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/select2/select2.min.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css?v=1.0')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Custom Style -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/dist/css/Puskesmas.css?v=1.0')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/plugins/datatables/dataTables.bootstrap4.css')}}">

  <style>
    .search{
      display: none;
    }
    #view > tbody > tr > td:first-child{
      width: 200px;
    }
    
  </style>
</head>