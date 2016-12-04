<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $gender=[
        'Masculino',
        'Femenino',
        'Trans',
        'Otro'
    ];

    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'phone' => $faker->e164PhoneNumber,
        'gender' => $gender[rand(0,3)],
        'birthdate' => $faker->date,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Publication::class, function (Faker\Generator $faker) {
    static $password;

    $images=[
        'images/bici.jpg',
        'images/camara2.jpg',
        'images/coser.jpg',
        'images/reloj.jpg',
        'images/telefonos2.jpg',
        'images/bici2.png',
        'images/camion.jpg',
        'images/maquina de escribir.jpg',
        'images/polaroid.jpg',
        'images/tambo.jpg',
        'images/toca discos.jpg',
        'images/camara.jpg',
        'images/Coca Cola.jpeg',
        'images/mesa.jpg',
        'images/radio2.jpg',
        'images/telefono1.jpg',
        'images/camara2.jpg',
        'images/horno.jpg',
        'images/radio.jpg',
        'images/radio5.jpg',
        'images/telefono2.jpg',
        'images/camara3.jpg',
        'images/camara4.jpg',
        'images/microfono.jpg',
        'images/radio2.jpg',
        'images/sillon.jpg',
        'images/televisor.jpg',
        'images/carrito.jpg',
        'images/microfono2.jpg',
        'images/radio3.jpg',
        'images/telefono.jpg',
        'images/tocaDiscos.jpg',
        'images/heladera.jpg',
        'images/monitor.jpg',
        'images/radio4.jpg',
        'images/telefono1.jpg',
        'images/tocaDiscos2.jpg',
        'images/camara4.jpg',
        'images/televisor2.jpg',
        'images/maquina2.jpg',
    ];

    return [
        'title' => $faker->text(50),
        'description' => $faker->text(500),
        'price' => $faker->randomNumber(4),
        'stock' => rand(1,10),
        'url_image' => $images[rand(0,38)],
        'user_id' => rand(1,50),
        'categorie_id' => rand(1,6),
        'created_at' => date('Y-m-d H:i:s')
    ];
});