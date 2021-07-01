<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Plate;
use Illuminate\Support\Str;

class PlatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Ristorante Italiano
        Plate::create(
            [
                'nome_piatto' => 'Bucatini all\'amatriciana',
                'prezzo' => 5.00,
                'descrizione' => 'Un classico della cucina italina',
                'visibilita' => 1,
                'user_id' => 1,
                'dish_id' => 1,
                'ingredienti' => 'Pomodoro, peperoncino, guanciale e pecorino'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Parmigiana di melanzane',
                'prezzo' => 7.00,
                'descrizione' => 'La parmigiana di melanzane è una delle ricette italiane più famose e amate, si prepara specialmente al sud Italia con tante e golose varianti!',
                'visibilita' => 1,
                'user_id' => 1,
                'dish_id' => 2,
                'ingredienti' => 'Melanzane, fior di latte, cipolle, passata di pomodori e parmigiano reggiano DOP'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Margherita',
                'prezzo' => 4.00,
                'descrizione' => 'La più classica tra le pizze',
                'visibilita' => 1,
                'user_id' => 1,
                'dish_id' => 5,
                'ingredienti' => 'Pomodoro, mozzarella e basilico'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Pastiera napoletana',
                'prezzo' => 3.00,
                'descrizione' => 'La pastiera è un dolce pasquale partenopeo a base di pasta frolla, con crema di grano, ricotta e canditi. Talmente buona che si gusta tutto l\'anno!',
                'visibilita' => 1,
                'user_id' => 1,
                'dish_id' => 9,
                'ingredienti' => 'Miele, scorza d\'arancia, scorza di limone, latte, burro, ricotta, latte, miele e uova'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Coca-Cola',
                'prezzo' => 2.00,
                'descrizione' => null,
                'visibilita' => 1,
                'user_id' => 1,
                'dish_id' => 12,
                'ingredienti' => null
            ]
        );
        //Fine Ristorante Italiano

        //Ristorante Giapponese
        Plate::create(
            [
                'nome_piatto' => 'Sushi Misto',
                'prezzo' => 13.00,
                'descrizione' => '6 nigiri, 4 uramaki, 4 hosomaki',
                'visibilita' => 1,
                'user_id' => 2,
                'dish_id' => 4,
                'ingredienti' => '6 nigiri, 4 uramaki, 4 hosomaki'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Nigiri Sake',
                'prezzo' => 4.00,
                'descrizione' => 'Salmone',
                'visibilita' => 1,
                'user_id' => 2,
                'dish_id' => 4,
                'ingredienti' => 'Salmone'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Calamari Fritti',
                'prezzo' => 7.00,
                'descrizione' => 'Calamari',
                'visibilita' => 1,
                'user_id' => 2,
                'dish_id' => 13,
                'ingredienti' => 'Calamari'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Pollo al curry',
                'prezzo' => 5.50,
                'descrizione' => 'Curry e carote',
                'visibilita' => 1,
                'user_id' => 2,
                'dish_id' => 6,
                'ingredienti' => 'Curry e carote'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Mochi',
                'prezzo' => 4.00,
                'descrizione' => 'Mochi',
                'visibilita' => 1,
                'user_id' => 2,
                'dish_id' => 9,
                'ingredienti' => 'Mochi'
            ]
        );
        //Fine Ristorante Giapponese

        //Ristorante Messicano
        Plate::create(
            [
                'nome_piatto' => 'Anelli di cipolla',
                'prezzo' => 6.00,
                'descrizione' => '10 pezzi',
                'visibilita' => 1,
                'user_id' => 3,
                'dish_id' => 8,
                'ingredienti' => 'Anelli di cipolla fritti con salsa'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Taco de carne',
                'prezzo' => 12.00,
                'descrizione' => 'tre tortillas di grano farcite con manzo, guacamole, insalata, pico de gallo, crema di fagioli e servite con chip di mais',
                'visibilita' => 1,
                'user_id' => 3,
                'dish_id' => 1,
                'ingredienti' => 'tre tortillas di grano farcite con manzo, guacamole, insalata, pico de gallo, crema di fagioli e servite con chip di mais'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Burrito frida',
                'prezzo' => 12.00,
                'descrizione' => 'tortilla di grano farcita con pollo, riso, crauto rosso, crema di fagioli, formaggio, insalata, pico de gallo servita con chips di mais',
                'visibilita' => 1,
                'user_id' => 3,
                'dish_id' => 2,
                'ingredienti' => 'tortilla di grano farcita con pollo, riso, crauto rosso, crema di fagioli, formaggio, insalata, pico de gallo servita con chips di mais'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Acqua Naturale',
                'prezzo' => 1.50,
                'descrizione' => '50cl',
                'visibilita' => 1,
                'user_id' => 3,
                'dish_id' => 11,
                'ingredienti' => '50cl'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Birra rossa',
                'prezzo' => 3.50,
                'descrizione' => '33cl',
                'visibilita' => 1,
                'user_id' => 3,
                'dish_id' => 12,
                'ingredienti' => '33cl'
            ]
        );
        //Ristorante Messicano finito

        //Ristorante Thailandese
        Plate::create(
            [
                'nome_piatto' => 'Khao Suai',
                'prezzo' => 3.50,
                'descrizione' => 'Riso Thai jasmine al vapore',
                'visibilita' => 1,
                'user_id' => 4,
                'dish_id' => 1,
                'ingredienti' => 'Riso Thai jasmine al vapore'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Khao Neaow Mamuang',
                'prezzo' => 6.50,
                'descrizione' => 'Mare e riso glutinoso con latte di cocco',
                'visibilita' => 1,
                'user_id' => 4,
                'dish_id' => 9,
                'ingredienti' => 'Mare e riso glutinoso con latte di cocco'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Moo Yang',
                'prezzo' => 6.00,
                'descrizione' => 'Spiedini di maiale marinato con erbe tailandesi alla piastra servito con salsa piccante',
                'visibilita' => 1,
                'user_id' => 4,
                'dish_id' => 8,
                'ingredienti' => 'Spiedini di maiale marinato con erbe tailandesi alla piastra servito con salsa piccante'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Phad Kraprow',
                'prezzo' => 12.00,
                'descrizione' => 'Saltato con basilico dolce e peperoncino in salsa d\' ostrica servito con riso al vapore e uovo fritto',
                'visibilita' => 1,
                'user_id' => 4,
                'dish_id' => 1,
                'ingredienti' => 'Saltato con basilico dolce e peperoncino in salsa d\' ostrica servito con riso al vapore e uovo fritto'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Laab',
                'prezzo' => 10.00,
                'descrizione' => 'Insalata di pollo cotta con menta, peperoncino, polvere di riso tostato, lime e scalogno',
                'visibilita' => 1,
                'user_id' => 4,
                'dish_id' => 10,
                'ingredienti' => 'Insalata di pollo cotta con menta, peperoncino, polvere di riso tostato, lime e scalogno'
            ]
        );
        //Ristorante thailandese finito

        //Ristorante Cinese
        Plate::create(
            [
                'nome_piatto' => 'Involtini primavera',
                'prezzo' => 1.60,
                'descrizione' => '1 pezzo',
                'visibilita' => 1,
                'user_id' => 5,
                'dish_id' => 8,
                'ingredienti' => 'Farina, crauti, carote e cipolla'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Tagiolini cinesi di grano  con gamberi e verdure',
                'prezzo' => 4.50,
                'descrizione' => null,
                'visibilita' => 1,
                'user_id' => 5,
                'dish_id' => 1,
                'ingredienti' => null
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Pollo in salsa d\'ostriche e cipollotto',
                'prezzo' => 5.50,
                'descrizione' => null,
                'visibilita' => 1,
                'user_id' => 5,
                'dish_id' => 6,
                'ingredienti' => null
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Calamari in salsa chili',
                'prezzo' => 6.00,
                'descrizione' => 'piccante',
                'visibilita' => 1,
                'user_id' => 5,
                'dish_id' => 7,
                'ingredienti' => 'peperoni'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Acqua Naturale',
                'prezzo' => 1.00,
                'descrizione' => '50cl',
                'visibilita' => 1,
                'user_id' => 5,
                'dish_id' => 11,
                'ingredienti' => '50cl'
            ]
        );
        //Ristorante Cinese finito

        //Ristorante Francese
        Plate::create(
            [
                'nome_piatto' => 'Acqua Frizzante',
                'prezzo' => 1.20,
                'descrizione' => '50cl',
                'visibilita' => 1,
                'user_id' => 6,
                'dish_id' => 11,
                'ingredienti' => '50cl'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Omelette',
                'prezzo' => 2.00,
                'descrizione' => 'L\'omelette è un piatto d\'origine francese, che non va confuso con la classica frittata italiana.',
                'visibilita' => 1,
                'user_id' => 6,
                'dish_id' => 8,
                'ingredienti' => 'Uova, latte, olio e sale'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Quiche con zucchine e ricotta',
                'prezzo' => 7.00,
                'descrizione' => 'Una torta salata con zucchine, una pietanza deliziosa, con una superficie croccante di parmigiano grattugiato, un cuore morbido e profumato che conquisterà proprio tutti.',
                'visibilita' => 1,
                'user_id' => 6,
                'dish_id' => 2,
                'ingredienti' => 'Uova, zucchine, ricotta, panna, olio e noce moscata'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Parmigiana di melanzane',
                'prezzo' => 7.00,
                'descrizione' => 'La parmigiana di melanzane è una delle ricette italiane più famose e amate, si prepara specialmente al sud Italia con tante e golose varianti!',
                'visibilita' => 1,
                'user_id' => 6,
                'dish_id' => 2,
                'ingredienti' => 'Melanzane, fior di latte, cipolle, passata di pomodori e parmigiano reggiano DOP'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Margherita',
                'prezzo' => 6.00,
                'descrizione' => 'La classica italiana',
                'visibilita' => 1,
                'user_id' => 6,
                'dish_id' => 5,
                'ingredienti' => 'Pomodoro, mozzarella e basilico'
            ]
        );
        //Ristorante francese finito

        //Ristorante americano
        Plate::create(
            [
                'nome_piatto' => 'Hamburger Classico',
                'prezzo' => 9.00,
                'descrizione' => 'Hamburger 220g, pomodori, insalata, cipolle caramellate, maionese e salsa bbq',
                'visibilita' => 1,
                'user_id' => 7,
                'dish_id' => 3,
                'ingredienti' => 'Hamburger 220g, pomodori, insalata, cipolle caramellate, maionese e salsa bbq'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Tagliata Classica',
                'prezzo' => 15.00,
                'descrizione' => 'Tagliata di manzo servita con patate aromatizzate alle erbe',
                'visibilita' => 1,
                'user_id' => 7,
                'dish_id' => 2,
                'ingredienti' => 'Tagliata di manzo servita con patate aromatizzate alle erbe'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Alette di pollo',
                'prezzo' => 5.00,
                'descrizione' => '',
                'visibilita' => 1,
                'user_id' => 7,
                'dish_id' => 13,
                'ingredienti' => '6 pezzi'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Burrito frida',
                'prezzo' => 12.00,
                'descrizione' => 'tortilla di grano farcita con pollo, riso, crauto rosso, crema di fagioli, formaggio, insalata, pico de gallo servita con chips di mais',
                'visibilita' => 1,
                'user_id' => 7,
                'dish_id' => 2,
                'ingredienti' => 'tortilla di grano farcita con pollo, riso, crauto rosso, crema di fagioli, formaggio, insalata, pico de gallo servita con chips di mais'
            ]
        );

        Plate::create(
            [
                'nome_piatto' => 'Taco de carne',
                'prezzo' => 12.00,
                'descrizione' => 'tre tortillas di grano farcite con manzo, guacamole, insalata, pico de gallo, crema di fagioli e servite con chip di mais',
                'visibilita' => 1,
                'user_id' => 7,
                'dish_id' => 1,
                'ingredienti' => 'tre tortillas di grano farcite con manzo, guacamole, insalata, pico de gallo, crema di fagioli e servite con chip di mais'
            ]
        );
        //Ristorante americano finito
    }
}
