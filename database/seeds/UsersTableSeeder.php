<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        User::firstOrCreate(['email' => 'test1@gmail.com'], ['name' => 'Jack']);
        User::firstOrCreate(['email' => 'test2@gmail.com'], ['name' => 'Amelie']);
        User::firstOrCreate(['email' => 'test3@gmail.com'], ['name' => 'Rafael']);
        User::reguard();
    }
}
