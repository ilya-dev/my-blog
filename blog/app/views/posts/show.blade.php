@extends('layouts.master')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <div class="content">
        {{ $post->content }}
    </div>
@stop
