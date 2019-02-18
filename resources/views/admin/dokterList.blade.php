@extends('layouts.app')
@section('content')
    <div class="row  justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card">
                        <div class="card-body">
                            <h2>User List</h2><br><br>
                            <a href="new-user" class="btn btn-primary">Add User</a>
                            <br><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama Dokter</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($test as $tes)
                                            <tr>
                                                <td>{{$tes->nama}}</td>
                                                <td>{{$tes}}</td>
                                                <td>
                                                    {{-- <a href="{{action('UsersController@editByAdmin', $user['username'])}}" class="btn btn-warning">Edit</a> --}}
                                                </td>
                                                <td>
                                                    {{-- <form class="delete" onsubmit="return confirm('Anda yakin ingin menghapus user ini?');" action="{{action('UsersController@destroy', $user['username'])}}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        @if ($user->username === 'admin' || $user->username === $userNow)
                                                            <input class="btn btn-danger" type="submit" value="Delete" disabled>
                                                        @else
                                                            <input class="btn btn-danger" type="submit" value="Delete">
                                                        @endif                  
                                                    </form> --}}
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