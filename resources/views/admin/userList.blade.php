@extends('layouts.app')
@section('content')
    <div class="row  justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card">
                        <div class="card-body">
                            <h2>User List</h2><br>
                            <a href="new-user" class="btn btn-primary">Add User</a>
                            <br><br>
                            <table class="table">
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
                                                    <a href="{{action('UsersController@editByAdmin', $user['username'])}}" class="btn btn-warning btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <form class="delete" onsubmit="return confirm('Anda yakin ingin menghapus user ini?');" action="{{action('UsersController@destroy', $user['username'])}}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        @if ($user->username === 'admin' || $user->username === $userNow)
                                                            <input class="btn btn-danger btn-sm" type="submit" value="Hapus" disabled>
                                                        @else
                                                            <input class="btn btn-danger btn-sm" type="submit" value="Hapus">
                                                        @endif                  
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