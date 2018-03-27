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
    	DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'admin',
            'group_id' => 2,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@123'),
        ]);
    }
}
