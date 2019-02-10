@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Ruangan') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/ruangan/{{$ruangan->KodeRuangan}}">
                        @csrf
                        <div class="form-group row">
                            <label for="namaRuangan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Ruangan') }}</label>
                            
                            <div class="col-md-6">
                                <input id="namaRuangan" type="namaRuangan" class="form-control{{ $errors->has('namaRuangan') ? ' is-invalid' : '' }}" name="namaRuangan" value="{{ $ruangan->NamaRuangan }}" required>

                                @if ($errors->has('namaRuangan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('namaRuangan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ipComputer" class="col-md-4 col-form-label text-md-right">{{ __('IP Komputer') }}</label>

                            <div class="col-md-6">
                                <input id="ipComputer" type="ipComputer" class="form-control{{ $errors->has('ipComputer') ? ' is-invalid' : '' }}" name="ipComputer" value="{{$ruangan->ipComputer}}" required>
                                
                                @if ($errors->has('ipComputer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ipComputer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
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
@endsection
