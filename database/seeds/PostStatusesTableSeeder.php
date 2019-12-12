<?php

use Illuminate\Database\Seeder;
use App\PostStatus;

class PostStatusesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PostStatus::firstOrCreate(['status' => PostStatus::STATUS_PUBLISHED]);
        PostStatus::firstOrCreate(['status' => PostStatus::STATUS_UNPUBLISHED]);
        PostStatus::firstOrCreate(['status' => PostStatus::STATUS_DRAFT]);
    }
}
