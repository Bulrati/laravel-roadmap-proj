@extends('layout.mainlayout')
@section('content')
    <div class="container">
        Are you sure you want to delete post #{{ $id }}
        <div class="row">
            <div class="col">
                <a href="{{route('post.index')}}" class="btn btn-block btn-lg btn-info">Back</a>
            </div>
            <div class="col">
                {{Form::open(array('action' => ['PostsController@destroy', $id]))}}
                {{Form::submit('Delete', array('class' => 'btn btn-block btn-lg btn-danger'))}}
                {{Form::close() }}
            </div>
        </div>
    </div>
@endsection