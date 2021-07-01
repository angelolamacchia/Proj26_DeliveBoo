<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Order;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Ordini ristorante Italiano
        $order = Order::create(
            [ 
                'nome' => 'Azeglio', 
                'cognome' => 'Ciampi',
                'email' => 'AzeglioCiampi@libero.it',
                'numero_telefono' => '3209816588',
                'totale' => 12,
                'minuti_consegna' => 30,
                'info' => 'Non ho molta fame',
                'indirizzo' => 'Via Azelio Ciampi',
                'created_at' => '2021-02-20 09:04:31',
                'updated_at' => '2021-02-20 09:04:31'
            ]
        );
        $order->plates()->attach([1, 2]);

        $order = Order::create(
            [ 
                'nome' => 'Luca', 
                'cognome' => 'Nervi',
                'email' => 'LucaNervi@libero.it',
                'numero_telefono' => '3209816580',
                'totale' => 7,
                'minuti_consegna' => 30,
                'info' => 'Questo romperà i Maroni alla direzione',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 10:04:31',
                'updated_at' => '2021-02-20 10:04:31'
            ]
        );
        $order->plates()->attach([3, 4]);

        $order = Order::create(
            [ 
                'nome' => 'Olmo', 
                'cognome' => 'Ghesizzi',
                'email' => 'OlmoGhesizzi@libero.it',
                'numero_telefono' => '3209816581',
                'totale' => 10,
                'minuti_consegna' => 30,
                'info' => 'Vorrei anche un bel panino con mortadella e maionese',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 11:04:31',
                'updated_at' => '2021-02-20 11:04:31'
            ]
        );
        $order->plates()->attach([3, 3, 5]);

        $order = Order::create(
            [ 
                'nome' => 'Paolo', 
                'cognome' => 'Bitta',
                'email' => 'PaoloBitta@libero.it',
                'numero_telefono' => '3209816582',
                'totale' => 9,
                'minuti_consegna' => 30,
                'info' => 'Il corriere deve avere un\'ALFA e deve portarmi il nuovo numero di Camper Magazine',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-03-20 9:04:31',
                'updated_at' => '2021-03-20 9:04:31'
            ]
        );
        $order->plates()->attach([3, 1]);

        $order = Order::create(
            [ 
                'nome' => 'Silvano', 
                'cognome' => 'Rogi',
                'email' => 'SilvanoRogi@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 9,
                'minuti_consegna' => 30,
                'info' => 'TOGO',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-04-20 9:04:31',
                'updated_at' => '2021-04-20 9:04:31'
            ]
        );
        $order->plates()->attach([3, 1]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 21,
                'minuti_consegna' => 30,
                'info' => null,
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:04:31',
                'updated_at' => '2021-05-20 9:04:31'
            ]
        );
        $order->plates()->attach([1, 2, 3, 4, 5]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 21,
                'minuti_consegna' => 30,
                'info' => 'Ho molto fame, sa\' sono incinta',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:34:31',
                'updated_at' => '2021-05-20 9:34:31'
            ]
        );
        $order->plates()->attach([1, 2, 3, 4, 5]);

        //Fine ordini ristorante Italiano

        //Ordini ristorante Giapponese
        $order = Order::create(
            [ 
                'nome' => 'Azeglio', 
                'cognome' => 'Ciampi',
                'email' => 'AzeglioCiampi@libero.it',
                'numero_telefono' => '3209816588',
                'totale' => 17,
                'minuti_consegna' => 30,
                'info' => 'Non ho molta fame',
                'indirizzo' => 'Via Azelio Ciampi',
                'created_at' => '2021-02-20 09:04:31',
                'updated_at' => '2021-02-20 09:04:31'
            ]
        );
        $order->plates()->attach([6, 7]);

        $order = Order::create(
            [ 
                'nome' => 'Luca', 
                'cognome' => 'Nervi',
                'email' => 'LucaNervi@libero.it',
                'numero_telefono' => '3209816580',
                'totale' => 12.50,
                'minuti_consegna' => 30,
                'info' => 'Questo romperà i Maroni alla direzione',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 10:04:31',
                'updated_at' => '2021-02-20 10:04:31'
            ]
        );
        $order->plates()->attach([8, 9]);

        $order = Order::create(
            [ 
                'nome' => 'Olmo', 
                'cognome' => 'Ghesizzi',
                'email' => 'OlmoGhesizzi@libero.it',
                'numero_telefono' => '3209816581',
                'totale' => 30,
                'minuti_consegna' => 30,
                'info' => 'Vorrei anche un bel panino con mortadella e maionese',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 11:04:31',
                'updated_at' => '2021-02-20 11:04:31'
            ]
        );
        $order->plates()->attach([6, 6, 10]);

        $order = Order::create(
            [ 
                'nome' => 'Paolo', 
                'cognome' => 'Bitta',
                'email' => 'PaoloBitta@libero.it',
                'numero_telefono' => '3209816582',
                'totale' => 20,
                'minuti_consegna' => 30,
                'info' => 'Il corriere deve avere un\'ALFA e deve portarmi il nuovo numero di Camper Magazine',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-03-20 9:04:31',
                'updated_at' => '2021-03-20 9:04:31'
            ]
        );
        $order->plates()->attach([7, 7, 7, 7, 7]);

        $order = Order::create(
            [ 
                'nome' => 'Silvano', 
                'cognome' => 'Rogi',
                'email' => 'SilvanoRogi@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 9.50,
                'minuti_consegna' => 30,
                'info' => 'TOGO',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-04-20 9:04:31',
                'updated_at' => '2021-04-20 9:04:31'
            ]
        );
        $order->plates()->attach([9, 10]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 33.50,
                'minuti_consegna' => 30,
                'info' => null,
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:04:31',
                'updated_at' => '2021-05-20 9:04:31'
            ]
        );
        $order->plates()->attach([6, 7, 8, 9, 10]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 33.50,
                'minuti_consegna' => 30,
                'info' => 'Ho molto fame, sa\' sono incinta',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:34:31',
                'updated_at' => '2021-05-20 9:34:31'
            ]
        );
        $order->plates()->attach([6, 7, 8, 9, 10]);
        //Fine ordini ristorante Giapponese

        //Inizio ordini ristorante Messicano
        $order = Order::create(
            [ 
                'nome' => 'Azeglio', 
                'cognome' => 'Ciampi',
                'email' => 'AzeglioCiampi@libero.it',
                'numero_telefono' => '3209816588',
                'totale' => 18,
                'minuti_consegna' => 30,
                'info' => 'Non ho molta fame',
                'indirizzo' => 'Via Azelio Ciampi',
                'created_at' => '2021-02-20 09:04:31',
                'updated_at' => '2021-02-20 09:04:31'
            ]
        );
        $order->plates()->attach([11, 12]);

        $order = Order::create(
            [ 
                'nome' => 'Luca', 
                'cognome' => 'Nervi',
                'email' => 'LucaNervi@libero.it',
                'numero_telefono' => '3209816580',
                'totale' => 13.50,
                'minuti_consegna' => 30,
                'info' => 'Questo romperà i Maroni alla direzione',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 10:04:31',
                'updated_at' => '2021-02-20 10:04:31'
            ]
        );
        $order->plates()->attach([13, 14]);

        $order = Order::create(
            [ 
                'nome' => 'Olmo', 
                'cognome' => 'Ghesizzi',
                'email' => 'OlmoGhesizzi@libero.it',
                'numero_telefono' => '3209816581',
                'totale' => 24,
                'minuti_consegna' => 30,
                'info' => 'Vorrei anche un bel panino con mortadella e maionese',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 11:04:31',
                'updated_at' => '2021-02-20 11:04:31'
            ]
        );
        $order->plates()->attach([11, 11, 13]);

        $order = Order::create(
            [ 
                'nome' => 'Paolo', 
                'cognome' => 'Bitta',
                'email' => 'PaoloBitta@libero.it',
                'numero_telefono' => '3209816582',
                'totale' => 15.50,
                'minuti_consegna' => 30,
                'info' => 'Il corriere deve avere un\'ALFA e deve portarmi il nuovo numero di Camper Magazine',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-03-20 9:04:31',
                'updated_at' => '2021-03-20 9:04:31'
            ]
        );
        $order->plates()->attach([13, 15]);

        $order = Order::create(
            [ 
                'nome' => 'Silvano', 
                'cognome' => 'Rogi',
                'email' => 'SilvanoRogi@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 18,
                'minuti_consegna' => 30,
                'info' => 'TOGO',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-04-20 9:04:31',
                'updated_at' => '2021-04-20 9:04:31'
            ]
        );
        $order->plates()->attach([11, 12]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 31.50,
                'minuti_consegna' => 30,
                'info' => null,
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:04:31',
                'updated_at' => '2021-05-20 9:04:31'
            ]
        );
        $order->plates()->attach([11, 12, 14, 13]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 31.50,
                'minuti_consegna' => 30,
                'info' => 'Ho molto fame, sa\' sono incinta',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:34:31',
                'updated_at' => '2021-05-20 9:34:31'
            ]
        );
        $order->plates()->attach([11, 12, 14, 13]);
        //Fine ordini ristorante Messicano

        //Inizio ordini ristorante Thailandese
        $order = Order::create(
            [ 
                'nome' => 'Azeglio', 
                'cognome' => 'Ciampi',
                'email' => 'AzeglioCiampi@libero.it',
                'numero_telefono' => '3209816588',
                'totale' => 10,
                'minuti_consegna' => 30,
                'info' => 'Non ho molta fame',
                'indirizzo' => 'Via Azelio Ciampi',
                'created_at' => '2021-02-20 09:04:31',
                'updated_at' => '2021-02-20 09:04:31'
            ]
        );
        $order->plates()->attach([16, 17]);

        $order = Order::create(
            [ 
                'nome' => 'Luca', 
                'cognome' => 'Nervi',
                'email' => 'LucaNervi@libero.it',
                'numero_telefono' => '3209816580',
                'totale' => 18,
                'minuti_consegna' => 30,
                'info' => 'Questo romperà i Maroni alla direzione',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 10:04:31',
                'updated_at' => '2021-02-20 10:04:31'
            ]
        );
        $order->plates()->attach([18, 19]);

        $order = Order::create(
            [ 
                'nome' => 'Olmo', 
                'cognome' => 'Ghesizzi',
                'email' => 'OlmoGhesizzi@libero.it',
                'numero_telefono' => '3209816581',
                'totale' => 19,
                'minuti_consegna' => 30,
                'info' => 'Vorrei anche un bel panino con mortadella e maionese',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 11:04:31',
                'updated_at' => '2021-02-20 11:04:31'
            ]
        );
        $order->plates()->attach([17, 17, 18]);

        $order = Order::create(
            [ 
                'nome' => 'Paolo', 
                'cognome' => 'Bitta',
                'email' => 'PaoloBitta@libero.it',
                'numero_telefono' => '3209816582',
                'totale' => 16,
                'minuti_consegna' => 30,
                'info' => 'Il corriere deve avere un\'ALFA e deve portarmi il nuovo numero di Camper Magazine',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-03-20 9:04:31',
                'updated_at' => '2021-03-20 9:04:31'
            ]
        );
        $order->plates()->attach([20, 18]);

        $order = Order::create(
            [ 
                'nome' => 'Silvano', 
                'cognome' => 'Rogi',
                'email' => 'SilvanoRogi@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 18.50,
                'minuti_consegna' => 30,
                'info' => 'TOGO',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-04-20 9:04:31',
                'updated_at' => '2021-04-20 9:04:31'
            ]
        );
        $order->plates()->attach([17, 19]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 38,
                'minuti_consegna' => 30,
                'info' => null,
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:04:31',
                'updated_at' => '2021-05-20 9:04:31'
            ]
        );
        $order->plates()->attach([16, 17, 18, 19, 20]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 38,
                'minuti_consegna' => 30,
                'info' => 'Ho molto fame, sa\' sono incinta',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:34:31',
                'updated_at' => '2021-05-20 9:34:31'
            ]
        );
        $order->plates()->attach([16, 17, 18, 19, 20]);
        //Fine ordini ristorante Thailandese

        //Inizio ordini ristorante Cinese
        $order = Order::create(
            [ 
                'nome' => 'Azeglio', 
                'cognome' => 'Ciampi',
                'email' => 'AzeglioCiampi@libero.it',
                'numero_telefono' => '3209816588',
                'totale' => 6.10,
                'minuti_consegna' => 30,
                'info' => 'Non ho molta fame',
                'indirizzo' => 'Via Azelio Ciampi',
                'created_at' => '2021-02-20 09:04:31',
                'updated_at' => '2021-02-20 09:04:31'
            ]
        );
        $order->plates()->attach([21, 22]);

        $order = Order::create(
            [ 
                'nome' => 'Luca', 
                'cognome' => 'Nervi',
                'email' => 'LucaNervi@libero.it',
                'numero_telefono' => '3209816580',
                'totale' => 11.50,
                'minuti_consegna' => 30,
                'info' => 'Questo romperà i Maroni alla direzione',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 10:04:31',
                'updated_at' => '2021-02-20 10:04:31'
            ]
        );
        $order->plates()->attach([23, 24]);

        $order = Order::create(
            [ 
                'nome' => 'Olmo', 
                'cognome' => 'Ghesizzi',
                'email' => 'OlmoGhesizzi@libero.it',
                'numero_telefono' => '3209816581',
                'totale' => 11,
                'minuti_consegna' => 30,
                'info' => 'Vorrei anche un bel panino con mortadella e maionese',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 11:04:31',
                'updated_at' => '2021-02-20 11:04:31'
            ]
        );
        $order->plates()->attach([22, 23, 25]);

        $order = Order::create(
            [ 
                'nome' => 'Paolo', 
                'cognome' => 'Bitta',
                'email' => 'PaoloBitta@libero.it',
                'numero_telefono' => '3209816582',
                'totale' => 4.80,
                'minuti_consegna' => 30,
                'info' => 'Il corriere deve avere un\'ALFA e deve portarmi il nuovo numero di Camper Magazine',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-03-20 9:04:31',
                'updated_at' => '2021-03-20 9:04:31'
            ]
        );
        $order->plates()->attach([21, 21, 21]);

        $order = Order::create(
            [ 
                'nome' => 'Silvano', 
                'cognome' => 'Rogi',
                'email' => 'SilvanoRogi@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 7,
                'minuti_consegna' => 30,
                'info' => 'TOGO',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-04-20 9:04:31',
                'updated_at' => '2021-04-20 9:04:31'
            ]
        );
        $order->plates()->attach([24, 25]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 18.60,
                'minuti_consegna' => 30,
                'info' => null,
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:04:31',
                'updated_at' => '2021-05-20 9:04:31'
            ]
        );
        $order->plates()->attach([21, 22, 23, 24, 25]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 18.60,
                'minuti_consegna' => 30,
                'info' => 'Ho molto fame, sa\' sono incinta',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:34:31',
                'updated_at' => '2021-05-20 9:34:31'
            ]
        );
        $order->plates()->attach([21, 22, 23, 24, 25]);
        //Fine ordini ristorante Cinese

        //Inizio ordini ristorante Francese
        $order = Order::create(
            [ 
                'nome' => 'Azeglio', 
                'cognome' => 'Ciampi',
                'email' => 'AzeglioCiampi@libero.it',
                'numero_telefono' => '3209816588',
                'totale' => 9,
                'minuti_consegna' => 30,
                'info' => 'Non ho molta fame',
                'indirizzo' => 'Via Azelio Ciampi',
                'created_at' => '2021-02-20 09:04:31',
                'updated_at' => '2021-02-20 09:04:31'
            ]
        );
        $order->plates()->attach([27, 28]);

        $order = Order::create(
            [ 
                'nome' => 'Luca', 
                'cognome' => 'Nervi',
                'email' => 'LucaNervi@libero.it',
                'numero_telefono' => '3209816580',
                'totale' => 8.20,
                'minuti_consegna' => 30,
                'info' => 'Questo romperà i Maroni alla direzione',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 10:04:31',
                'updated_at' => '2021-02-20 10:04:31'
            ]
        );
        $order->plates()->attach([29, 26]);

        $order = Order::create(
            [ 
                'nome' => 'Olmo', 
                'cognome' => 'Ghesizzi',
                'email' => 'OlmoGhesizzi@libero.it',
                'numero_telefono' => '3209816581',
                'totale' => 16,
                'minuti_consegna' => 30,
                'info' => 'Vorrei anche un bel panino con mortadella e maionese',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 11:04:31',
                'updated_at' => '2021-02-20 11:04:31'
            ]
        );
        $order->plates()->attach([27, 28, 29]);

        $order = Order::create(
            [ 
                'nome' => 'Paolo', 
                'cognome' => 'Bitta',
                'email' => 'PaoloBitta@libero.it',
                'numero_telefono' => '3209816582',
                'totale' => 6,
                'minuti_consegna' => 30,
                'info' => 'Il corriere deve avere un\'ALFA e deve portarmi il nuovo numero di Camper Magazine',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-03-20 9:04:31',
                'updated_at' => '2021-03-20 9:04:31'
            ]
        );
        $order->plates()->attach([27, 27, 27]);

        $order = Order::create(
            [ 
                'nome' => 'Silvano', 
                'cognome' => 'Rogi',
                'email' => 'SilvanoRogi@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 13,
                'minuti_consegna' => 30,
                'info' => 'TOGO',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-04-20 9:04:31',
                'updated_at' => '2021-04-20 9:04:31'
            ]
        );
        $order->plates()->attach([30, 29]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 23.20,
                'minuti_consegna' => 30,
                'info' => null,
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:04:31',
                'updated_at' => '2021-05-20 9:04:31'
            ]
        );
        $order->plates()->attach([26, 27, 28, 29, 30]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 23.20,
                'minuti_consegna' => 30,
                'info' => 'Ho molto fame, sa\' sono incinta',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:34:31',
                'updated_at' => '2021-05-20 9:34:31'
            ]
        );
        $order->plates()->attach([26, 27, 28, 29, 30]);
        //Fine ordini ristorante Francese

        //Inizio ordini ristorante Americano
        $order = Order::create(
            [ 
                'nome' => 'Azeglio', 
                'cognome' => 'Ciampi',
                'email' => 'AzeglioCiampi@libero.it',
                'numero_telefono' => '3209816588',
                'totale' => 14,
                'minuti_consegna' => 30,
                'info' => 'Non ho molta fame',
                'indirizzo' => 'Via Azelio Ciampi',
                'created_at' => '2021-02-20 09:04:31',
                'updated_at' => '2021-02-20 09:04:31'
            ]
        );
        $order->plates()->attach([31, 33]);

        $order = Order::create(
            [ 
                'nome' => 'Luca', 
                'cognome' => 'Nervi',
                'email' => 'LucaNervi@libero.it',
                'numero_telefono' => '3209816580',
                'totale' => 27,
                'minuti_consegna' => 30,
                'info' => 'Questo romperà i Maroni alla direzione',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 10:04:31',
                'updated_at' => '2021-02-20 10:04:31'
            ]
        );
        $order->plates()->attach([32, 35]);

        $order = Order::create(
            [ 
                'nome' => 'Olmo', 
                'cognome' => 'Ghesizzi',
                'email' => 'OlmoGhesizzi@libero.it',
                'numero_telefono' => '3209816581',
                'totale' => 23,
                'minuti_consegna' => 30,
                'info' => 'Vorrei anche un bel panino con mortadella e maionese',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-02-20 11:04:31',
                'updated_at' => '2021-02-20 11:04:31'
            ]
        );
        $order->plates()->attach([31, 31, 33]);

        $order = Order::create(
            [ 
                'nome' => 'Paolo', 
                'cognome' => 'Bitta',
                'email' => 'PaoloBitta@libero.it',
                'numero_telefono' => '3209816582',
                'totale' => 17,
                'minuti_consegna' => 30,
                'info' => 'Il corriere deve avere un\'ALFA e deve portarmi il nuovo numero di Camper Magazine',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-03-20 9:04:31',
                'updated_at' => '2021-03-20 9:04:31'
            ]
        );
        $order->plates()->attach([33, 34]);

        $order = Order::create(
            [ 
                'nome' => 'Silvano', 
                'cognome' => 'Rogi',
                'email' => 'SilvanoRogi@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 21,
                'minuti_consegna' => 30,
                'info' => 'TOGO',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-04-20 9:04:31',
                'updated_at' => '2021-04-20 9:04:31'
            ]
        );
        $order->plates()->attach([31, 35]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 53,
                'minuti_consegna' => 30,
                'info' => null,
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:04:31',
                'updated_at' => '2021-05-20 9:04:31'
            ]
        );
        $order->plates()->attach([31, 32, 33, 34, 35]);

        $order = Order::create(
            [ 
                'nome' => 'Patrizia', 
                'cognome' => 'D\'Imporzano',
                'email' => 'Imporzano@libero.it',
                'numero_telefono' => '3209816583',
                'totale' => 53,
                'minuti_consegna' => 30,
                'info' => 'Ho molto fame, sa\' sono incinta',
                'indirizzo' => 'Via C14',
                'created_at' => '2021-05-20 9:34:31',
                'updated_at' => '2021-05-20 9:34:31'
            ]
        );
        $order->plates()->attach([31, 32, 33, 34, 35]);
        //Fine ordini ristorante Americano
    }
}
