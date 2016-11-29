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
        $faker = Faker\Factory::create();
        DB::table('publications')->insert(
            [
                [
                    'title' => 'Bicicleta Antigua',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/bici.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Camara Fotografica',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/camara.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Camion de Madera',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/camion.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 5,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Maquina de Coser',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/coser.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Toca Discos',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/toca discos.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Camara fotográfica antigua',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/camara2.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Toca Discos',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/toca discos.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 3,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Reloj Despertador',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/reloj.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Mesa estilo antiguo',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/mesa.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 3,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Telefono estilo antiguo',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/telefonos2.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Telefono Era POP',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/telefono1.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Tambo',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/tambo.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 4,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Radio estilo años 60',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/radio2.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Maquina de Escribir',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/maquina de escribir.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Máquina Fotográfica Polaroid',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/polaroid.jpg',
                    'user_id' => rand(1,50),
                    'categorie_id' => 2,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'Bicicleta antigua',
                    'description' => $faker->text(500),
                    'price' => $faker->randomNumber(4),
                    'stock' => rand(1,10),
                    'url_image' => 'images/bici2.png',
                    'user_id' => rand(1,50),
                    'categorie_id' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                ]

            ]
        );
    }

}


