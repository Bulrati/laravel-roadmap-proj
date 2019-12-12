@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <p>{{ $status }}</p>
        <a href="{{route('post.index')}}" class="btn btn-primary">Back to the all posts</a>
    </div>
@endsection