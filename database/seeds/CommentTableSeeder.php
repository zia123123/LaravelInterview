<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Post::class, 50)->create()->each(function ($post) {
        $post->comment()->save(factory(App\Comment::class)->make());
    });
  }
         
}
