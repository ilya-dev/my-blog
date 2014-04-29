@extends('layouts.master')

@section('title', $post->title)

@section('content')
    @include('partials.post')

    @if (Auth::check())
        <a class="btn btn-lg btn-primary pull-left" href="/posts/{{ $post->id }}/edit">Edit</a>

        {{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) }}
            {{ Form::hidden('pretend', Input::get('pretend', '0'), ['id' => 'pretend']) }}
            {{ Form::button('Remove', ['class' => 'btn btn-lg btn-danger', 'type' => 'submit']) }}
        {{ Form::close() }}
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

        button {
            margin-left: 10px;
        }
    </style>
@stop

