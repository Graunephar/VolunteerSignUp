@extends('layouts.app')
@section('content')

    {{ Form::open(array('route' => 'route.signup')) }}
    //
    {{ Form::close() }}

@stop