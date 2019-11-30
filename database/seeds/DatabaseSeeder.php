<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		\Illuminate\Support\Facades\DB::statement( 'SET FOREIGN_KEY_CHECKS=0' );
		\Illuminate\Support\Facades\DB::table( 'users' )->truncate();
		\Illuminate\Support\Facades\DB::table( 'post_statuses' )->truncate();
		\Illuminate\Support\Facades\DB::table( 'posts' )->truncate();

		$this->call( PostStatusesTableSeeder::class );
		factory( App\User::class, 2 )->create();
		factory( App\Post::class, 4 )->create();
	}
}
