<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'verified' => 1,
            'admin' => 1,
        ]);
    }
}
