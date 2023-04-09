@extends('layouts.template')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.conta.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("conta.update", [$Conta->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="cpf">{{ trans('cruds.conta.fields.cpf') }}</label>
                <input class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" type="text" name="cpf" id="cpf" value="{{ old('cpf', $Conta->cpf) }}" required>
                @if($errors->has('cpf'))
                    <span class="text-danger">{{ $errors->first('cpf') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.conta.fields.cpf_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="conta">{{ trans('cruds.conta.fields.conta') }}</label>
                <input class="form-control {{ $errors->has('conta') ? 'is-invalid' : '' }}" type="text" name="conta" id="conta" value="{{ old('conta', $Conta->conta) }}" required>
                @if($errors->has('conta'))
                    <span class="text-danger">{{ $errors->first('conta') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.conta.fields.conta_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection