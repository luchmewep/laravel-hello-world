<?php

namespace Luchavez\HelloWorld\Domains\Greetings\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Luchavez\HelloWorld\Domains\Greetings\Database\Factories\GreetingFactory;

/**
 * Trait HasGreetingFactoryTrait
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
trait HasGreetingFactoryTrait
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory(): Factory
    {
        return GreetingFactory::new();
    }
}

