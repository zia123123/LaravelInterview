<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 50)->create()->each(function ($user) {
        $user->post()->save(factory(App\Post::class)->make());
    });
    }
}
