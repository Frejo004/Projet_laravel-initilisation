<?php

namespace Database\Factories;

use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;
use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */


class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Article::class;


    public function definition(): array
    {

        $imageFaker = new ImageFaker(new Picsum());


        return [
            'title' => $this->faker->text(15), //on veut 15 mots
            'body' => $this->faker->text(200), // on veut 50 mots
            'user_id' => function(){
                return User::inRandomOrder()->first()->id;
            },
            'image' => $imageFaker->image(public_path("images"))
        ];
    }
}
