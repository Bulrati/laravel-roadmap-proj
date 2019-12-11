@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <h1>Title: {{$post['title']}}</h1>
        <p>Slug: {{$post['slug']}}</p>
        <p>Author: {{$post['author']}}</p>
        <p>Content: {{$post['content']}}</p>
        <p>Excerpt: {{$post['excerpt']}}</p>
        <p>Status: {{$post['status']}}</p>
        <p>Created: {{$post['created_at']}}</p>
        <p>Created: {{$post['updated_at']}}</p>
        <p>
        {{Form::open(array('route' => ['post.edit_form', $post['id']], 'method' => 'get'))}}
        <p>{{Form::submit('Edit', array('class' => 'btn btn-primary'))}}</p>
        {{Form::close() }}
        {{Form::open(array('action' => ['PostsController@destroy', $post['id']]))}}
        <p>{{Form::submit('Delete', array('class' => 'btn btn-primary'))}}</p>
        {{Form::close() }}
        </p>
        <a href="{{route('post.index')}}" class="btn btn-secondary">Back to all</a>
    </div>
@endsection
