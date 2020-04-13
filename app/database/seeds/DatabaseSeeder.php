<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  $this->call(RoleTableSeeder::class);
     //   $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        DB::table('roles')->truncate();
        DB::table('categories')->truncate();
        DB::table('photos')->truncate();
        DB::table('comments')->truncate();
        DB::table('comment_replies')->truncate();

        factory(App\Role::class, 4)->create();

        factory(App\Category::class, 6)->create();
        
        factory(App\Tag::class, 6)->create();

        factory(App\User::class, 10)->create()->each(function($user){
            $post = $user->posts()->save(factory(App\Post::class)->make());
            $post->categories()->attach([rand(1,10),rand(1,2)]);
            $post->tags()->attach([rand(1,10),rand(1,4)]);
        });

        factory(App\Photo::class, 1)->create();

        factory(App\Comment::class, 10)->create()->each(function ($c) {
            $c->replies()->save(factory(App\CommentReply::class)->make());
        });

    }
}
