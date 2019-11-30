<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define( \App\User::class, function ( Faker $faker ) {
	return [
		'name'  => $faker->name,
		'email' => $faker->unique()->email,
	];
} );

$factory->define( \App\Post::class, function ( Faker $faker ) {
	return [
		'author_id' => $faker->numberBetween( 1, 2 ),
		'slug'      => $faker->unique()->word,
		'title'     => $faker->sentence,
		'content'   => $faker->sentence,
		'excerpt'   => $faker->sentence,
		'status_id' => $faker->numberBetween( 1, 3 )
	];
} );
