<?php

use Illuminate\Database\Seeder;
//use database\seeds\PostsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        $this->call('PostsTableSeeder');
        $this->call('TagTableSeeder');   	

    }
}
