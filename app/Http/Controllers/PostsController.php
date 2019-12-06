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

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        $post_attributes['author'] = User::find($post_attributes['author_id'])->name;
        unset($post_attributes['author_id']);
        $post_attributes['status'] = PostStatus::find($post_attributes['status_id'])->status;
        unset($post_attributes['status_id']);

        return view('posts.details')->with('post', $post_attributes)->with('a', $post);
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
        //
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

        return view('posts.updated')->with('post', $post);
    }

    /**
     * Display the edit form with the predefined fields.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updateDataFromView($id)
    {
        $users         = User::all()->toArray();
        $post_statuses = PostStatus::all()->toArray();

        return view('posts.edit_form')->with('post', Post::find($id))->with(
            'users',
            $users
        )->with(
            'post_statuses',
            $post_statuses
        );
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

        return view('posts.deleted');
    }
}
