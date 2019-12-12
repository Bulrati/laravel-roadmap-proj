@extends('layout.mainlayout')
@section('content')
    <div class="container">
        {{Form::open(['action' => ['PostsController@store']])}}
        <div class="form-group">
            {!! Form::label('Slug') !!}
            <p>{{Form::text('slug')}}</p>
        </div>
        <div class="form-group">
            {!! Form::label('Author') !!}
            <p> {{Form::select('author_id', array_column( $users, 'name', 'id') )}}</p>
        </div>
        <div class="form-group">
            {!! Form::label('Title') !!}
            <p>{{Form::text('title')}}</p>
        </div>
        <div class="form-group">
            {!! Form::label('Content') !!}
            <p> {{Form::text('content')}}</p>
        </div>
        <div class="form-group">
            {!! Form::label('Excerpt') !!}
            <p>{{Form::text('excerpt')}}</p>
        </div>
        <div class="form-group">
            {!! Form::label('Status') !!}
            <p> {{Form::select('status_id', array_column( $post_statuses, 'status', 'id') )}}</p>
        </div>
        <div class="form-group">
            <p>{{Form::submit('Create', array('class'=>'btn btn-primary'))}}</p>
        </div>
        {{Form::close()}}
    </div>
@endsection