@extends('layouts.template')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.conta.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('conta.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.conta.fields.id') }}
                        </th>
                        <td>
                            {{ $Conta->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.conta.fields.cpf') }}
                        </th>
                        <td>
                            {{ $Conta->cpf }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.conta.fields.conta') }}
                        </th>
                        <td>
                            {{ $Conta->conta }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('conta.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection