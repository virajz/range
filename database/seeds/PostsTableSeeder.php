<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Post', 5000)->create();
        factory('App\Post', 500)->create(['from' => null, 'to' => null]);
        // factory('App\Post', 5000)->create();
        // factory('App\Post', 500)->create(['from' => null, 'to' => null]);
        // factory('App\Post', 5000)->create();
        // factory('App\Post', 500)->create(['from' => null, 'to' => null]);
        // factory('App\Post', 5000)->create();
        // factory('App\Post', 500)->create(['from' => null, 'to' => null]);
        // factory('App\Post', 5000)->create();
        // factory('App\Post', 500)->create(['from' => null, 'to' => null]);
        // factory('App\Post', 10)->create();
        // factory('App\Post', 2)->create(['from' => null, 'to' => null]);
    }
}
