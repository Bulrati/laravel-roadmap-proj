<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\PostStatus;

class PostsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::unguard();
        Post::firstOrCreate(['slug' => 'post1'], [
            'author_id' => 1,
            'title'     => 'Title1',
            'content'   => 'Content1',
            'excerpt'   => 'Excerpt1',
            'status_id' => PostStatus::ID_DRAFT,
        ]);
        Post::firstOrCreate(['slug' => 'post2'], [
            'author_id' => 2,
            'title'     => 'Title2',
            'content'   => 'Content2',
            'excerpt'   => 'Excerpt2',
            'status_id' => PostStatus::ID_PUBLISHED
        ]);
        Post::firstOrCreate(['slug' => 'post3'], [
            'author_id' => 2,
            'title'     => 'Title3',
            'content'   => 'Content3',
            'excerpt'   => 'Excerpt3',
            'status_id' => PostStatus::ID_UNPUBLISHED
        ]);
        Post::firstOrCreate(['slug' => 'post4'], [
            'author_id' => 1,
            'title'     => 'Title4',
            'content'   => 'Content4',
            'excerpt'   => 'Excerpt4',
            'status_id' => PostStatus::ID_DRAFT
        ]);
        Post::reguard();
    }
}
