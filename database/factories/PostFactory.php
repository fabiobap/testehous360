<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'titulo' => $faker->sentence(10),
        'descricao' => $faker->paragraphs(3, true),
        'urlDaImagem' => $faker->picsumUrl(400, 400)
    ];
});
