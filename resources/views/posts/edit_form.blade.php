@extends('layout.mainlayout')
@section('content')
    <?php
    array_unshift($users, 'Please select');
    array_unshift($post_statuses, 'Please select');
    ?>
    <div class="container">
        {{Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'post'])}}
        <div class="row">
            <div class="col-lg-6">
                <h1>Post#{{$post->id}}</h1>
            </div>
            <div class="row col-lg-6 align-items-center justify-content-end">
                <div class="col col-lg-3">
                    {{Form::submit('Update', array('class'=>'btn btn-block btn-lg btn-primary'))}}
                </div>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <div class="row">
                <div class="col">
                    {!! Form::label('Title') !!}:
                    <p>{{Form::text('title', null, array('class' => 'form-control'))}}</p>
                </div>
                <div class="col">
                    {!! Form::label('Slug') !!}:
                    <p>{{Form::text('slug', null, array('class' => 'form-control'))}}</p>
                </div>

                <div class="col">
                    {!! Form::label('Author') !!}:
                    <p>{{Form::select('author_id', $users, null, array('class' => 'form-control'))}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {!! Form::label('Content') !!}:
                    <p>{{Form::textarea('content', null, array('class' => 'form-control'))}}</p>
                </div>
                <div class="col">
                    {!! Form::label('Excerpt') !!}:
                    <p>{{Form::textarea('excerpt', null, array('class' => 'form-control'))}}</p>
                </div>
            </div>
            {!! Form::label('Status') !!}:
            <p>{{Form::select('status_id', $post_statuses, null, array('class' => 'form-control'))}}</p>
        </div>
        {{Form::close()}}
        <hr>

        <div class="row justify-content-end pt-3 pb-3">
            <div class="col-lg-2 d-flex ">
                <a href="{{route('post.index')}}" class="btn btn-block btn-lg btn-info">Back to all</a>
            </div>
        </div>
    </div>
@endsection