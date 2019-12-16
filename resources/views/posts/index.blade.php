@extends('layout.mainlayout')
@section('content')

    <div class="container-fluid">
        <div>
            <ul>

            </ul>
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