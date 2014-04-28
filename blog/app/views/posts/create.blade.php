@extends('layouts.master')

@section('title', 'Add a post')

@section('content')
    <h1>Add a post</h1>

    @include('partials.errors')

    {{ Form::open(['route' => 'posts.store']) }}
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('content') }}
            {{ Form::textarea('content', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::button('Add', [
                'class' => 'btn btn-primary btn-lg',
                'type'  => 'submit',
            ]) }}
        </div>
    {{ Form::close() }}
@stop

