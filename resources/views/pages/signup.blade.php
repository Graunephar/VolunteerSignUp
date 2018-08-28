@extends('layouts.app')
@section('content')

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>


    <script type="text/javascript">

        $('#signupform').submit(function (e) {
            e.preventDefault();
            window.alert("sometext");
        })

    </script>
    @foreach ($errors->all() as $message)

        <div class="alert alert-warning" role="alert">
            {{ $message }}
        </div>

    @endforeach


    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @else

        {{ Form::open(array('action' => 'VolunteerController@store', 'id' => 'signupform')) }}
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

        {{ Form::label('firstnight', 'Har du mulighed for at tage nattevagt fra 22:00 - 02:00?') }}
        {{ Form::checkbox('firstnight')}}}}

        {{ Form::label('secondnight', 'Har du mulighed for at tage nattevagt fra 22:00 - 02:00?') }}
        {{ Form::checkbox('secondnight')}}}}

        //Timeslots her

        {{ Form::submit('Gem') }};

        {{ Form::close() }}


    @endif


@stop
