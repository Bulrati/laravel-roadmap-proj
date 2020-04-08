@extends('layout.mainlayout')
@section('content')
    <?php
    array_unshift($users, 'Please select');
    array_unshift($post_statuses, 'Please select');
    ?>
    <div class="container mt-5">
        {{Form::open(['action' => ['PostsController@store']])}}
        <div class="row">
            <div class="col-lg-6">
                <h1>New post</h1>
            </div>
            <div class="row col-lg-6 align-items-center justify-content-end">
                <div class="col col-lg-4">
                    {{Form::submit('Create', array('class'=>'btn btn-block btn-lg btn-primary'))}}
                </div>
                <div class="col col-lg-4">
                    <a href="{{route('post.index')}}" class="btn btn-block btn-lg btn-info">Back to all</a>
                </div>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <div class="row">
                <div class="col">
                    {!! Form::label('Title') !!} *:
                    <p>{{Form::text('title', '', array('class' => 'form-control'))}}</p>
                </div>
                <div class="col">
                    {!! Form::label('Slug') !!} *:
                    <p>{{Form::text('slug', '', array('class' => 'form-control'))}}</p>
                </div>
                <div class="col">
                    {!! Form::label('Author') !!}:
                    <p>{{Form::select('author_id', $users, null, array( 'class' => 'form-control' ))}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {!! Form::label('Content') !!}:
                    <p>{{Form::textarea('content', '', array('class' => 'form-control'))}}</p>
                </div>
                <div class="col">
                    {!! Form::label('Excerpt') !!}:
                    <p>{{Form::textarea('excerpt', '', array('class' => 'form-control'))}}</p>
                </div>
            </div>
            {!! Form::label('Status') !!}:
            <p>{{Form::select('status_id', $post_statuses, null, array( 'class' => 'form-control' ))}}</p>
        </div>
        {{Form::close()}}
    </div>
@endsection