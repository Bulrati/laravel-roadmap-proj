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

        \Illuminate\Support\Facades\DB::table('post_statuses')->insert([
            'status' => 'published'
        ]);
        \Illuminate\Support\Facades\DB::table('post_statuses')->insert([
            'status' => 'unpublished'
        ]);
        \Illuminate\Support\Facades\DB::table('post_statuses')->insert([
            'status' => 'draft'
        ]);
    }
}
