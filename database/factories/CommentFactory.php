<?php

use Faker\Generator as Faker;

$factory->define(App\Models\CommentModel::class, function (Faker $faker) {
    return [
        //
        'comment_name'=>$faker->name,
        'comment_content'=>$faker->text,
        'created_at' => new DateTime,
    ];
});
