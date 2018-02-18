@extends('layouts.app')

@section('content')
    <br>
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="alert alert-light">
                <h3>
                    <a href="{{ URL::to('posts/'.$post->id)}}">
                        {{$post->title}}
                    </a>
                </h3>
                <p>{{$post->body}}</p>
                <small>Posted on {{$post->created_at}}</small>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <div class="alert alert-danger">
            <h3>No Posts Found...!</h3>
        </div>
    @endif

@endsection