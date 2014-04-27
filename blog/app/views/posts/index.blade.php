@extends('layouts.master')

@section('title', 'Welcome!')

@section('content')
    @foreach ($posts as $post)
        <div class="post">
            <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>
            <div class="content">
                {{ $post->content }}
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
@stop
