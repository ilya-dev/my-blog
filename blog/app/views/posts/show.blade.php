@extends('layouts.master')

@section('title', $post->title)

@section('content')
    @include('partials.post')
    <div id="tags">
        @foreach ($post->tags as $tag)
            <a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a>
        @endforeach
    </div>
@stop

