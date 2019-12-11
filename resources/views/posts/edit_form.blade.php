@extends('layout.mainlayout')
@section('content')
    <div class="container">
        {{Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'post'])}}
        <p>{{Form::text('slug')}}</p>
        <p> {{Form::select('author_id', array_column( $users, 'name', 'id') )}}</p>
        <p>{{Form::text('title')}}</p>
        <p> {{Form::text('content')}}</p>
        <p>{{Form::text('excerpt')}}</p>
        <p> {{Form::select('status_id', array_column( $post_statuses, 'status', 'id') )}}</p>
        <p>{{Form::submit('Update', array('class'=>'btn btn-primary'))}}</p>
        {{Form::close()}}
    </div>
@endsection