<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {


    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory ->define(App\Item::class,function(Faker $faker){
    $categories = array('Laptop','Phone','GlassWare','Domestic','Documents');
    $item_name =array('Certificates','HP','Lenovo','Dell','Oxygen','General');
    $user = \App\User::inRandomOrder()->first();

    return [
        'category' => $faker->randomElement($categories),
        'item_name' =>$faker->randomElement($item_name),
        'serial_number' =>str_random(15),
        'description' =>$faker->text.substr(0,15),
        'user_id' =>$user->id,
    ];
});
