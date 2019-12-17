@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Title: {{$post->title}}</h1>
            </div>
            <div class="row col-lg-6 align-items-center justify-content-end">
                <div class="col col-lg-3">
                    {{Form::open(array('route' => ['post.edit', $post->id], 'method' => 'get'))}}
                    {{Form::submit('Edit', array('class' => 'btn btn-block btn-lg btn-primary'))}}
                    {{Form::close() }}
                </div>
                <div class="col col-lg-3">
                    {{Form::open(array('action' => ['PostsController@destroy', $post->id]))}}
                    {{Form::submit('Delete', array('class' => 'btn btn-block btn-lg btn-danger'))}}
                    {{Form::close() }}
                </div>
            </div>
        </div>

        <p>Slug: <u>{{$post->slug}}</u></p>
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="font-weight-bold">Author: {{$post->user->name}}</h5>
            <span class="text-success">Status: {{$post->status::STATUSES[$post->status->status]}}</span>
        </div>
        <hr>
        <div class="mt-5 mb-5">
            <p>Excerpt: {{$post->excerpt}}</p>
            <p>Content: {{$post->content}}</p>
        </div>
        <hr>

        <div class="d-flex flex-column align-items-end">
            <span>Created: {{\App\Helper::transformDate($post->created_at, \App\Post::DATE_FORMAT)}}</span>
            <span>Updated: {{\App\Helper::transformDate($post->updated_at, \App\Post::DATE_FORMAT)}}</span>
        </div>
        <div class="row justify-content-end pt-3 pb-3">
            <div class="col-lg-2 d-flex ">
                <a href="{{route('post.index')}}" class="btn btn-block btn-lg btn-info">Back to all</a>
            </div>
        </div>
    </div>
@endsection
