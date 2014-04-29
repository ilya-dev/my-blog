@extends('layouts.master')

@section('title', $post->title)

@section('content')
    @include('partials.post')

    @if (Auth::check())
        <a class="btn btn-lg btn-primary" href="/posts/{{ $post->id }}/edit">Edit</a>
    @endif

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

