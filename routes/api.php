<?php

use Illuminate\Support\Facades\Route;

/**
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */

Route::get('hello', function () {
    return customResponse()
        ->data([])
        ->message('Hello world!')
        ->generate();
});
