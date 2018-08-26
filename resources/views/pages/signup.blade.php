@extends('layouts.app')
@section('content')

    {{ Form::open(array('action' => 'VolunteerController@store')) }}
    @csrf

    {{ Form::label('name', 'Navn') }}
    {{ Form::text('name')}}

    {{ Form::label('phone', 'Telefonnummer') }}
    {{ Form::text('phone')}}

    {{ Form::label('email', 'E-Mail') }}
    {{ Form::text('email') }}

    {{ Form::label('group', 'Kreds/Gruppe') }}
    {{ Form::text('group')}}

    {{ Form::label('comments', 'Evt kommentarer') }}
    {{ Form::textarea('comments')}}}}

    {{ Form::submit('Gem') }};

    {{ Form::close() }}

@stop