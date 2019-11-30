<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'posts', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->integer( 'author_id' )->unsigned();
			$table->string( 'slug' );
			$table->string( 'title' );
			$table->text( 'content' );
			$table->text( 'excerpt' );
			$table->integer( 'status_id' )->unsigned();
			$table->timestamps();

			$table->foreign( 'author_id' )->references( 'id' )->on( 'users' );
			$table->foreign( 'status_id' )->references( 'id' )->on( 'post_statuses' );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'posts' );
	}
}
