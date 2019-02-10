@extends('layouts.app')
@section('content')
    <div class="row  justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card">
                        <div class="card-body">
                            <h2>Daftar Ruangan</h2><br>
                            <a href="add-ruangan" class="btn btn-primary">Tambah Ruangan</a>
                            <br><br>
                            <table class="table">
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