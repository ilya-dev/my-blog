@extends('layouts.master')

@section('title', 'Welcome!')

@section('content')
    @foreach ($posts as $post)
        @include('partials.post')
    @endforeach

    {{ $posts->links() }}
@stop
