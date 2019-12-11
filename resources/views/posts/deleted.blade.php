@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <h1>Post was deleted.</h1>
        <p>Go to to the other</p>
        <a href="{{route('post.index')}}" class="btn btn-primary">posts</a>
    </div>
@endsection