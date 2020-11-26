<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(Faker $value)
    {
        // return [
        //     'title' => $value->text(50),
        //         'slug' => $value->slug(),
        //         'body' => $value->paragraph(range(5,20))
        // ];
    }
}
