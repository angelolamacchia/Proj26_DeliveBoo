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
        $this->call(TagsSeeder::class);
        
        $this->call(DishesSeeder::class);
        
        $this->call(UsersSeeder::class);

        $this->call(PlatesSeeder::class);

        $this->call(OrdersSeeder::class);

    }
}
