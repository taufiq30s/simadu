@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/user/{{$user->username}}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user->username }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="oldPassword" type="password" class="form-control{{ $errors->has('oldPassword') ? ' is-invalid' : '' }}" name="oldPassword" oninput="requiredOrNot()">
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('oldPassword') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="newPassword" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="newPassword" type="password" class="form-control{{ $errors->has('newPassword') ? ' is-invalid' : '' }}" name="newPassword" >

                                @if ($errors->has('newPassword'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('newPassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newPassword-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="newPassword-confirm" type="password" class="form-control" name="newPassword_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            <div class="form-group col-md-6">
                                @if ($user->username === 'admin')
                                    <select id="inputState" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" disabled>
                                            <option selected value="admin">Admin</option>
                                    </select>
                                @else
                                    <select id="inputState" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role">
                                        @if ($user->role === 'admin')
                                        <option selected value="admin">Admin</option>
                                        <option value="dokter">Dokter</option>
                                        <option value="rekam_medis">Rekam Medis</option>
                                        <option value="apoteker">Apoteker</option>
                                        @elseif($user->role === 'dokter')
                                        <option selected value="dokter">Dokter</option>
                                        <option value="admin">Admin</option>
                                        <option value="rekam_medis">Rekam Medis</option>
                                        <option value="apoteker">Apoteker</option>
                                        @elseif($user->role === 'rekam_medis')
                                        <option selected value="rekam_medis">Rekam Medis</option>
                                        <option value="admin">Admin</option>
                                        <option value="dokter">Dokter</option>
                                        <option value="apoteker">Apoteker</option>
                                        @else
                                        <option selected value="apoteker">Apoteker</option>
                                        <option value="admin">Admin</option>
                                        <option value="dokter">Dokter</option>
                                        <option value="rekam_medis">Rekam Medis</option>
                                        @endif                                        
                                    </select>
                                @endif                                
                                @if ($errors->has('role'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('role') }}</strong>
                                </span>                                    
                                @endif
                              </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                                {{ csrf_field() }}
                                <input type="hidden" value="PUT" name="_method">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function requiredOrNot() {
        var val = document.getElementById("oldPassword").value;
        console.log(val);
        if(val != "") {
            document.getElementById("newPassword").required = true;
            document.getElementById("password-confirm").required = true;
        }
        else {
            document.getElementById("newPassword").required = false;
            document.getElementById("password-confirm").required = false;
        }
    }
</script>
@endsection
