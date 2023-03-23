<?php

namespace Luchavez\HelloWorld\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class HelloWorld
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 *
 * @see \Luchavez\HelloWorld\Services\HelloWorld
 */
class HelloWorld extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'hello-world';
    }
}
