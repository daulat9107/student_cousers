<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('groups')->truncate();
         DB::table('groups')->insert([
            'id' =>1,
            'name' =>'students',
        ]);
        DB::table('groups')->insert([
            'id' =>2,
            'name' =>'admin',
        ]);
    }
}
