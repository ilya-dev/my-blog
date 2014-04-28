@extends('layouts.master')

@section('title', 'Login page')

@section('content')
    <h1>Login</h1>

    @include('partials.errors')

    {{ Form::open(['url' => 'create_session']) }}
        <div class="form-group">
            {{ Form::label('email', 'E-Mail address') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::button('Get in!', ['class' => 'btn btn-lg btn-primary', 'type' => 'submit']) }}
        </div>
    {{ Form::close() }}
@stop

