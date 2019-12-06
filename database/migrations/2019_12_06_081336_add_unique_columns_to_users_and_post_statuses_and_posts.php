<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueColumnsToUsersAndPostStatusesAndPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unique('email');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->unique('slug');
        });

        Schema::table('post_statuses', function (Blueprint $table) {
            $table->unique('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('email');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropUnique('slug');
        });

        Schema::table('post_statuses', function (Blueprint $table) {
            $table->dropUnique('status');
        });
    }
}
