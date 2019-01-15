<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Post::class, 10)->create();
        factory(Category::class, 10)->create();
        factory(User::class, 10)->create();
    }
}
