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
        
        factory('App\User')->create(
            [
                'name'      => 'alexandre',
                'email'     => 'alexandrebezao@gmail.com',
                'password'  => bcrypt(123456),
                'remember_token' => str_random(10)
            ]
        );

        // $this->call(UserTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        Model::reguard();
    }
}
