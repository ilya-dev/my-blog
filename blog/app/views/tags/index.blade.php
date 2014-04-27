@extends('layouts.master')

@section('title', 'All tags')

@section('content')
    <h1>Tags</h1>

    @foreach ($tags as $tag)
        <div class="tag">
            {{ $tag->name }}
        </div>
    @endforeach

    <style>
        body {
            padding-bottom: 30px;
        }
    </style>
@stop
