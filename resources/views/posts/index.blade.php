@extends('layout.mainlayout')
@section('content')

    <div>
        <ul>

        </ul>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>

        @foreach( $posts as $post )
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td><a href="{{route('post.show', $post->id)}}">Post #{{$post->id}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection