@extends('layouts.master')

@section('title', $post->title)

@section('content')
    @include('partials.post')
    <div id="tags">
        Tags:
        @foreach ($post->tags as $tag)
            <a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a>
        @endforeach
    </div>

    <style>
        #tags {
            font-size: 24px;
        }
    </style>
@stop

