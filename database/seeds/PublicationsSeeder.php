<?php

use Illuminate\Database\Seeder;

class PublicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert(
            [
                [
                    'title' => 'Bicicleta Antigua',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'price' => 850.00,
                    'stock' => 1,
                    'url_image' => 'images/bici.jpg',
                    'user_id' => 1,
                    'categorie_id' => 1
                ],
                [
                    'title' => 'Camara Fotografica',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'price' => 1500.00,
                    'stock' => 1,
                    'url_image' => 'images/camara.jpg',
                    'user_id' => 1,
                    'categorie_id' => 2
                ],
                [
                    'title' => 'Camion de Madera',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'price' => 200.00,
                    'stock' => 1,
                    'url_image' => 'images/camion.jpg',
                    'user_id' => 1,
                    'categorie_id' => 5
                ],
                [
                    'title' => 'Maquina de Coser',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'price' => 2500.00,
                    'stock' => 1,
                    'url_image' => 'images/coser.jpg',
                    'user_id' => 1,
                    'categorie_id' => 4
                ],
                [
                    'title' => 'Toca Discos',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'price' => 3500.00,
                    'stock' => 1,
                    'url_image' => 'images/toca discos.jpg',
                    'user_id' => 1,
                    'categorie_id' => 3
                ],

            ]
        );
    }

}


