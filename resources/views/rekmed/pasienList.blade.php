@extends('layouts.app')
@section('content')
    <div class="row  justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card">
                        <div class="card-body">
                            <h2>Data Pasien</h2><br>
                            <a href="pasien/daftar" class="btn btn-primary">Daftar Pasien</a>
                            <br><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nomor Pasien</th>
                                        <th scope="col">Nomor KK</th>
                                        <th scope="col">Nomor KTP</th>
                                        <th scope="col">Nomor BPJS</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Riwayat Alergi</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($pasiens as $pasien)
                                            <tr>
                                                <td>{{$pasien->NoPasien}}</td>
                                                <td>{{$pasien->NoKK}}</td>
                                                <td>{{$pasien->NoKTP}}</td>
                                                @if ($pasien->NoBPJS === null)
                                                    <td>-</td>
                                                @else
                                                    <td>{{$pasien->NoBPJS}}</td>
                                                @endif
                                                <td>{{$pasien->NamaPasien}}</td>
                                                @if ($pasien->JK === 'L')
                                                    <td>Laki-Laki</td>
                                                @else
                                                    <td>Perempuan</td>
                                                @endif
                                                <td>date("d-m-Y", strtotime($pasien->TglLahir))</td>
                                                @if ($pasien->RiwayatAlergi === null)
                                                    <td>-</td>
                                                @else
                                                    <td>{{$pasien->RiwayatAlergi}}</td>
                                                @endif
                                                <td>{{$pasien->NoHP}}</td>
                                                <td>
                                                    <a href="{{action('PasienController@editByRekmed', $pasien['NoPasien'])}}" class="btn btn-warning btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <form class="delete" onsubmit="return confirm('Anda yakin ingin menghapus data pasien ini?');" action="{{action('PasienController@destroy', $user['username'])}}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input class="btn btn-danger btn-sm" type="submit" value="Hapus">                
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>     
                    </div>
                </div>
            </div>
        </div>            
    </div>
@endsection