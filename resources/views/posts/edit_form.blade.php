@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                {{Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'post'])}}
                <p>{{Form::text('slug')}}</p>
                <p> {{Form::select('author_id', $users )}}</p>
                <p>{{Form::text('title')}}</p>
                <p> {{Form::text('content')}}</p>
                <p>{{Form::text('excerpt')}}</p>
                <p> {{Form::select('status_id', $post_statuses )}}</p>
                <p>
            </div>
            <div class="col-lg-6">
                <div class="row col-lg-6 align-items-center justify-content-end">
                    {{Form::submit('Update', array('class'=>'btn btn-block btn-lg btn-primary'))}}</p>
                    {{Form::close()}}
                </div>
            </div>
        </div>
        <div class="row justify-content-end pt-3 pb-3">
            <div class="col-lg-2 d-flex ">
                <a href="{{route('post.index')}}" class="btn btn-block btn-lg btn-info">Back to all</a>
            </div>
        </div>
    </div>
@endsection