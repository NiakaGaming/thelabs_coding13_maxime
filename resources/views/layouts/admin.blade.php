@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">@yield('title')</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger position-relative">
                            {{ $errors->first('msg') }}
                        </div>
                    @endif
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
@stop
