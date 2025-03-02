<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use App\Model;
use App\Product;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2, 1, 1000),
        'quantity' => $faker->randomNumber(3),
        'brand_id' => function () {
            return factory(Brand::class)->create()->id;
        },
        'created_at' => Carbon::now()
    ];
});
