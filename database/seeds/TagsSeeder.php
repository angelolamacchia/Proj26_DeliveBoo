<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;
use Illuminate\Support\Str;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $array = ['Italiana', 'Giapponese', 'Messicana', 'Thailandese', 'Cinese', 'Francese', 'Americana'];

        for ($i = 0; $i < count($array); $i++) {
            $new_tag = new Tag();
            $new_tag->cucina = $array[$i];
            $new_tag->save();
        }
    }
}
