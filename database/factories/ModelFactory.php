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
    return [
        'user_name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\User::class, 'owner', function ($faker) use ($factory){
	$user = $factory->raw(App\User::class);

	return array_merge($user, ['user_type' => 1]);
});

$factory->define(App\Restaurant::class, function(Faker\Generator $faker) {
	return [
		'name' => 'Test Restaurant',
		'location' => 'Test Location',
		'contact_number' => '1234'
	];
});

