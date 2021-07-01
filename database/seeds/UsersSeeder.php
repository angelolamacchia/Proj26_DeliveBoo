<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS = Risto12345

        $user = User::create(
            [
                'id' => '1', 
                'nome_attivita' => 'Mario\'s Pizza', 
                'email' => 'Mario@pizza.it',
                'indirizzo' => 'Via dei funghi, 15',
                'p_iva' => '00000000000',
                'numero_telefono' => '3202255555',
                'password' => '$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS',
                'img_logo' => 'logos/Marios-Pizza.jpg',
                'img_banner' => 'banners/Marios-pizza-banner.png'
            ]
        );
        $user->tags()->sync([1]);

        $user = User::create(
            [
                'id' => '2', 
                'nome_attivita' => 'Futoshi', 
                'email' => 'Futoshi@sushi.it',
                'indirizzo' => 'Via del wasabi, 32',
                'p_iva' => '00000000001',
                'numero_telefono' => '3202255556',
                'password' => '$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS',
                'img_logo' => 'logos/Kazuma-logo.jpeg',
                'img_banner' => 'banners/Kazuma-banner.jpg'
            ]
        );
        $user->tags()->sync([2]);

        $user = User::create(
            [
                'id' => '3', 
                'nome_attivita' => 'Mr. Tacos', 
                'email' => 'Hermanos@burrito.it',
                'indirizzo' => 'Via Luchador, 11',
                'p_iva' => '00000000002',
                'numero_telefono' => '3202255557',
                'password' => '$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS',
                'img_logo' => 'logos/Mr-Tacos-logo.png',
                'img_banner' => 'banners/mr-taco-banner.png'
            ]
        );
        $user->tags()->sync([3]);

        $user = User::create(
            [
                'id' => '4', 
                'nome_attivita' => 'The Thai', 
                'email' => 'TheThai@Thai.it',
                'indirizzo' => 'Via muay Thai, 1',
                'p_iva' => '00000000003',
                'numero_telefono' => '3202255558',
                'password' => '$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS',
                'img_logo' => 'logos/Thai-logo.png',
                'img_banner' => 'banners/Thai-banner.jpeg'
            ]
        );
        $user->tags()->sync([4]);

        $user = User::create(
            [
                'id' => '5', 
                'nome_attivita' => 'Wok\'n\'Roll', 
                'email' => 'WoknRoll@Rock.it',
                'indirizzo' => 'Via della seta',
                'p_iva' => '00000000004',
                'numero_telefono' => '3202255559',
                'password' => '$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS',
                'img_logo' => 'logos/WokRoll-logo.png',
                'img_banner' => 'banners/WokRoll-banner.jpg'
            ]
        );
        $user->tags()->sync([5]);

        $user = User::create(
            [
                'id' => '6', 
                'nome_attivita' => 'La Ratatouille', 
                'email' => 'Ratatouille@fromage.it',
                'indirizzo' => 'Via Escargot, 121',
                'p_iva' => '00000000005',
                'numero_telefono' => '3202255560',
                'password' => '$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS',
                'img_logo' => 'logos/Ratatouille-logo.jpg',
                'img_banner' => 'banners/Ratatouille-banner.jpeg'
            ]
        );
        $user->tags()->sync([6, 1]);

        $user = User::create(
            [
                'id' => '7', 
                'nome_attivita' => 'Cork & Fork', 
                'email' => 'Cork&Fork@Star.it',
                'indirizzo' => 'Via Azelio Ciampi, 1',
                'p_iva' => '00000000006',
                'numero_telefono' => '3202255561',
                'password' => '$2y$10$yGCr9iTeDHW7uvcA9y.JlOdGl9NUd.oVxwgbjHDox0hmcqtjUGiFS',
                'img_logo' => 'logos/CorkFork-logo.jpg',
                'img_banner' => 'banners/CorkFork-banner.png'
            ]
        );
        $user->tags()->sync([7, 3]);
        
    }
}
