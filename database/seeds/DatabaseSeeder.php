<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use database\seeds\TagTableSeeder;
use database\seeds\PostsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //$this->call(TagTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        Model::reguard();
    }
}
