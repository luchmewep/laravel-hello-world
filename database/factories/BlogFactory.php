<?php

namespace Luchavez\HelloWorld\Database\Factories;

// Model
use Luchavez\HelloWorld\Models\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class Blog
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
