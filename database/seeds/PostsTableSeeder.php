<?php
namespace database\seeds;

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    
    public function run()
    {
        Post::truncate();
        factory(Post::class, 10)->create();
    }
    
}

