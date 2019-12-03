<div>
    Slug: {{$post['slug']}}
    <br/>
    Author: {{$post['author']}}
    <br/>
    Title: {{$post['title']}}
    <br/>
    Content: {{$post['content']}}
    <br/>
    Excerpt: {{$post['excerpt']}}
    <br/>
    Status: {{$post['status']}}
    <br/>
    Created: {{$post['created_at']}}
    <br/>
    Created: {{$post['updated_at']}}
</div>
{{Form::open(array('route' => ['post.edit_form', $post['id']], 'method' => 'get'))}}
{{Form::submit('Edit')}}
{{Form::close() }}
{{Form::open(array('action' => ['PostsController@destroy', $post['id']]))}}
{{Form::submit('Delete')}}
{{Form::close() }}

<a href="{{route('post.index')}}">Back to all</a>
