@extends('layout.mainlayout')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1>Posts</h1>
            </div>
            <div class="row col-lg-6 align-items-center justify-content-end">
                <div class="col col-lg-3">
                    <a class="btn btn-block btn-lg btn-primary" href="<?php echo route('post.create'); ?>">New post</a>
                </div>
            </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Author</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach( $posts as $post )
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->status->status}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>@include('posts.actions')</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection