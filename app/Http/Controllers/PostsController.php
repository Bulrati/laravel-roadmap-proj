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
        $users         = User::all()->toArray();
        $post_statuses = PostStatus::all()->toArray();

        return view('posts.create_form', [
            'users'         => $users,
            'post_statuses' => $post_statuses
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
        $status = 'New post was created. It\'s id: ' . $post->id;

        return view('posts.status', ['status' => $status]);
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
        $post                      = Post::find($id);
        $post_attributes           = $post->getAttributes();
        $post_attributes['author'] = $post->user->name;
        unset($post_attributes['author_id']);
        $post_attributes['status'] = $post->status->status;
        unset($post_attributes['status_id']);

        return view('posts.details', ['post' => $post_attributes]);
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
        $users         = User::all()->toArray();
        $post_statuses = PostStatus::all()->toArray();

        return view('posts.edit_form', [
            'post'          => Post::find($id),
            'users'         => $users,
            'post_statuses' => $post_statuses
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
        $post = Post::find($id);
        $post->update($request->all());
        $post->status_id = $request->status_id;
        $post->author_id = $request->author_id;
        $post->save();
        $status = $post->ID . ' was updated';

        return view('posts.status', ['status' => $status]);
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
        $status = 'Post #' . $id . ' was deleted';

        return view('posts.status', ['status' => $status]);
    }
}
