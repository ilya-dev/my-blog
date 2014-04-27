@extends('layouts.master')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <div class="content">
        {{ $post->content }}
    </div>
    <div id="tags">
        {{ implode(', ', array_pluck($post->tags, 'name')) }}
    </div>
@stop
