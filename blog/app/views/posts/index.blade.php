@foreach ($posts as $post)
    <div class="post">
        <h1>{{ $post->title }}</h1>
        <div class="content">
            {{ $post->content }}
        </div>
    </div>
@endforeach
