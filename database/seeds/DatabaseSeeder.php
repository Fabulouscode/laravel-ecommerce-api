<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 7)->create();

        factory(App\Model\Category::class, 10)->create();

        factory(App\Model\Product::class, 60)->create();

        factory(App\Model\Review::class, 400)->create();
    }
}
