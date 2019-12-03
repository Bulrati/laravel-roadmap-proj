{{Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'post'])}}
{{Form::text('slug')}}
<br/>
{{Form::select('author_id', array_column( $users, 'name', 'id') )}}
<br/>
{{Form::text('title')}}
<br/>
{{Form::text('content')}}
<br/>
{{Form::text('excerpt')}}
<br/>
{{Form::select('status_id', array_column( $post_statuses, 'status', 'id') )}}
<br/>
{{Form::submit('Update')}}
{{Form::close()}}
