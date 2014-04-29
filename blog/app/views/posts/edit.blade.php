@extends('layouts.master')

@section('title', 'Edit the post')

@section('content')
    <h1>Edit "{{ $post->title }}"</h1>

    {{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) }}
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
        </div>

        <div class="form-group">
            {{ Form::label('content') }}
            {{ Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content']) }}
        </div>

        <div class="form-group">
            {{ Form::button('Save the changes', ['type' => 'submit', 'class' => 'btn-primary btn btn-lg']) }}
        </div>
    {{ Form::close() }}
@stop
