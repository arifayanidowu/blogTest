@extends ('layouts.master')



@section('content')

@foreach ($posts as $post)

<hr/>

    <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>

    <h2>Published By: <span class="text-success">{{ $post->user->name }}</span> on</h2>
    <p>{{  $post->created_at->toDateTimeString()  }}</p>

    <ul>
        <li>{{ $post->body }}</li>
    </ul>

@endforeach

@endsection 