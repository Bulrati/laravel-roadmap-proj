<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostStatus;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersNames        = User::getAllNames();
        $postStatusesNames = PostStatus::getAllStatuses();

        return view('posts.create_form', [
            'users'         => $usersNames,
            'post_statuses' => $postStatusesNames
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post            = new Post($request->all());
        $post->author_id = $request->author_id;
        $post->status_id = $request->status_id;
        $post->save();
        $message = 'New post was created. It\'s id: '.$post->id;
        $status  = 'success';

        return redirect()->route('post.index')->with($status, $message);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.details', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userNames        = User::getAllNames();
        $postStatusesNames = PostStatus::getAllStatuses();

        return view('posts.edit_form', [
            'post'          => Post::findOrFail($id),
            'users'         => $userNames,
            'post_statuses' => $postStatusesNames
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        $post->status_id = $request->status_id;
        $post->author_id = $request->author_id;
        $post->save();
        $message = $post->ID.' was updated';
        $status  = 'success';

        return redirect()->route('post.index')->with($status, $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        $message = 'Post #' . $id . ' was deleted';
        $status  = 'success';

        return redirect()->route('post.index')->with($status, $message);
    }
}
