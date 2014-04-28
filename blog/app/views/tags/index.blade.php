@extends('layouts.master')

@section('title', 'All tags')

@section('content')
    <h1>Tags ({{ $tags->count() }})</h1>

    <ul class="list-unstyled" id="tags-list">
        @foreach ($tags as $tag)
            <li class="tag">
                <a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a>
                <span class="badge">{{ $tag->posts->count() }}</span>
            </li>
        @endforeach
    </ul>

    <style>
        body {
            padding-bottom: 30px;
        }

        #tags-list {
            font-size: 24px;
        }
    </style>
@stop
