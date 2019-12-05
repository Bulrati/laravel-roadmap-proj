<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\User::firstOrCreate(['email' => 'test1@gmail.com'], ['name' => 'Jack']);
        \App\User::firstOrCreate(['email' => 'test2@gmail.com'], ['name' => 'Amelie']);
        \App\User::firstOrCreate(['email' => 'test3@gmail.com'], ['name' => 'Rafael']);

    }
}
