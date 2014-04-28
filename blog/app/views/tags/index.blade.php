@extends('layouts.master')

@section('title', 'All tags')

@section('content')
    <h1>Tags</h1>

    @foreach ($tags as $tag)
        <div class="tag">
            <a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a>
        </div>
    @endforeach

    <style>
        body {
            padding-bottom: 30px;
        }
    </style>
@stop
