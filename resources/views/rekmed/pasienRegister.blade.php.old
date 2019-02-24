@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Pasien Baru') }}</div>

                <div class="card-body">
                    <form method="POST" action="/rekmed/pasien">
                        @csrf
                        <div class="form-group row">
                            <label for="NoPasien" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Pasien') }}</label>
                            
                            <div class="col-md-6">
                                <input id="NoPasien" type="NoPasien" class="form-control{{ $errors->has('NoPasien') ? ' is-invalid' : '' }}" name="NoPasien" value="{{ old('NoPasien') }}" required>

                                @if ($errors->has('NoPasien'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoPasien') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NoKK" class="col-md-4 col-form-label text-md-right">{{ __('No KK') }}</label>

                            <div class="col-md-6">
                                <input id="NoKK" type="NoKK" class="form-control{{ $errors->has('NoKK') ? ' is-invalid' : '' }}" name="NoKK" value="{{ old('NoKK') }}" required>
                                
                                @if ($errors->has('NoKK'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoKK') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NoKTP" class="col-md-4 col-form-label text-md-right">{{ __('No KTP') }}</label>

                            <div class="col-md-6">
                                <input id="NoKTP" type="NoKTP" class="form-control{{ $errors->has('NoKTP') ? ' is-invalid' : '' }}" name="NoKTP" value="{{ old('NoKTP') }}" required>
                                
                                @if ($errors->has('NoKTP'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoKTP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="NoBPJS" class="col-md-4 col-form-label text-md-right">{{ __('No BPJS') }}</label>

                            <div class="col-md-6">
                                <input id="NoBPJS" type="NoBPJS" class="form-control{{ $errors->has('NoBPJS') ? ' is-invalid' : '' }}" name="NoBPJS" value="{{ old('NoBPJS') }}" required>
                                
                                @if ($errors->has('NoBPJS'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoBPJS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NamaPasien" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="NamaPasien" type="NamaPasien" class="form-control{{ $errors->has('NamaPasien') ? ' is-invalid' : '' }}" name="NamaPasien" value="{{ old('NamaPasien') }}" required>
                                
                                @if ($errors->has('NamaPasien'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NamaPasien') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="JK" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="JK" value="L">Laki-Laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="JK" value="P">Peremupan
                                </label>
                                
                                @if ($errors->has('JK'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('JK') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="TglLahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="NoBPJS" type="NoBPJS" class="form-control{{ $errors->has('NoBPJS') ? ' is-invalid' : '' }}" name="NoBPJS" value="{{ old('NoBPJS') }}" required>
                                
                                @if ($errors->has('NoBPJS'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoBPJS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NoBPJS" class="col-md-4 col-form-label text-md-right">{{ __('No BPJS') }}</label>

                            <div class="col-md-6">
                                <input id="NoBPJS" type="NoBPJS" class="form-control{{ $errors->has('NoBPJS') ? ' is-invalid' : '' }}" name="NoBPJS" value="{{ old('NoBPJS') }}" required>
                                
                                @if ($errors->has('NoBPJS'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoBPJS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NoBPJS" class="col-md-4 col-form-label text-md-right">{{ __('No BPJS') }}</label>

                            <div class="col-md-6">
                                <input id="NoBPJS" type="NoBPJS" class="form-control{{ $errors->has('NoBPJS') ? ' is-invalid' : '' }}" name="NoBPJS" value="{{ old('NoBPJS') }}" required>
                                
                                @if ($errors->has('NoBPJS'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoBPJS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah') }}
                                </button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
