<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([ 'name' => 'admin' ]);
        DB::table('roles')->insert([ 'name' => 'user' ]);   // he uses the data
        DB::table('roles')->insert([ 'name' => 'editor' ]); // he can add and edit data
        DB::table('roles')->insert([ 'name' => 'viewer' ]); // he only can see the data
    }
}
