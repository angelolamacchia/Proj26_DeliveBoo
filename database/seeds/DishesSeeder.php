<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dish;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $array = ['Primi', 'Secondi', 'Hamburger', 'Sushi', 'Pizza', 'Pollo', 'Pesce', 'Antipasti', 'Dolci', 'Contorni', 'Bevande', 'Birre', 'Fritti'];

        for ($i = 0; $i < count($array); $i++) {
            $new_dish = new Dish();
            $new_dish->portata = $array[$i];
            $new_dish->save();
        }


    }
}
