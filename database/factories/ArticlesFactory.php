<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Articles;
use App\Models\Category;
use App\Models\User;


class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this ->faker->sentence,
            
            /* definos nuestra llaves foraneas */
            'category_id'=> Category::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
