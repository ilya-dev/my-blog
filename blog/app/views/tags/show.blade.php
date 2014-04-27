@extends('layouts.master')

@section('title', $tag->name)

@section('content')
    <h1>Tag "{{ $tag->name }}"</h1>

    @foreach ($tag->posts as $post)
        @include('partials.post')
    @endforeach
@stop

