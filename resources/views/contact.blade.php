@extends('layouts.app')
@section('title') contact @endsection

@section('content')
@include('inc.messages')
    <h1> contact </h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Name', ['class' => '']) }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'E-Mail Address', ['class' => '']) }}
            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@mail.com']) }}
        </div>
        <div class="form-group">
            {{ Form::label('message', 'Message', ['class' => 'awesome']) }}
            {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message']) }}
        </div>
        <div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        </div>
    {!! Form::close() !!}
@endsection