@extends ('layouts.master')


@section ('content')

    <h1 class="text-warning">Brand New Post</h1>
    <p class="text-muted">Blog post template by Stizzle</p>

    <hr/>

    <h2><a href="/views">{{ $post->title }}</a></h2>

    {{ $post->body }}

    <hr/>

    <div class="comment">
        <ul class="list-group">
            @foreach ($post->comments as $comment)

                <li class="list-group-item">

                    <strong class="text-success">
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>

                    {{ $comment->body }}

                </li>

            @endforeach
        
        </ul>
    </div>

    <hr/>

            <form method="POST" action="/posts/{{ $post->id }}/comments">

                {{ csrf_field() }}

                <div class="form-group">

                    @if ($errors->has('body'))

                        <span class="text-danger">{{ $errors->first() }}</span>

                    @endif

                    <textarea name="body" class="form-control col-sm-4" placeholder="Your comments here..."></textarea>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>



@endsection 