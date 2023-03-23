<?php

namespace Luchavez\HelloWorld\Domains\Greetings\Database\Factories;

// Model
use Luchavez\HelloWorld\Domains\Greetings\Models\Greeting;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class Greeting
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class GreetingFactory extends Factory
{
    protected $model = Greeting::class;

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
