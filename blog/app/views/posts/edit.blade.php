@extends('layouts.master')

@section('title', 'Edit the post')

@section('content')
    <h1>Edit "{{ $post->title }}"</h1>

    {{ Form::model($post, ['route' => 'posts.store']) }}
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('content') }}
            {{ Form::textarea('content', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::button('Save the changes', ['type' => 'submit', 'class' => 'btn-primary btn btn-lg']) }}
        </div>
    {{ Form::close() }}
@stop
