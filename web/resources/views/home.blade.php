@extends('layouts.template')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{trans('panel.welcomeMessage')}}
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection