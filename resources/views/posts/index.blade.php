<div>
    <ul>
        @foreach( $posts as $post )
            <li><a href="{{route('post.show', $post->id)}}">Post #{{$post->id}}</a></li>
        @endforeach
    </ul>
</div>
