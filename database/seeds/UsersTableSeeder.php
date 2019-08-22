<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->insert([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin'),
            'role' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table("users")->insert([
            'name' => 'special',
            'email' => 'special@test.com',
            'password' => bcrypt('special'),
            'role' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table("users")->insert([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => bcrypt('user'),
            'role' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
