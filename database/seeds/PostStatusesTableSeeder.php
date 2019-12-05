<?php

use Illuminate\Database\Seeder;

class PostStatusesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        App\PostStatus::firstOrCreate(['status' => \App\PostStatus::STATUS_PUBLISHED]);
        App\PostStatus::firstOrCreate(['status' => \App\PostStatus::STATUS_UNPUBLISHED]);
        App\PostStatus::firstOrCreate(['status' => \App\PostStatus::STATUS_DRAFT]);


    }
}
