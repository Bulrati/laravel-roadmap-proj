@extends('layout.mainlayout')
@section('content')

    <div class="container mb-">
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
            {!! Form::label('Title') !!} *:
            <p>{{Form::text('title', '', array('required' => 'required'))}}</p>

            {!! Form::label('Slug') !!} *:
            <p>{{Form::text('slug', '', array('required' => 'required'))}}</p>

            {!! Form::label('Author') !!}:
            <p>{{Form::select('author_id', $users)}}</p>

            {!! Form::label('Content') !!} *:
            <p>{{Form::textarea('content', '', array('required' => 'required'))}}</p>

            {!! Form::label('Excerpt') !!} *:
            <p>{{Form::textarea('excerpt', '', array('required' => 'required'))}}</p>

            {!! Form::label('Status') !!}:
            <p>{{Form::select('status_id', $post_statuses)}}</p>
        </div>
        {{Form::close()}}
    </div>
@endsection