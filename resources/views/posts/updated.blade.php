@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <p>Post {{$post->id}} was updated.</p>
        <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Back to post</a>
    </div>
@endsection