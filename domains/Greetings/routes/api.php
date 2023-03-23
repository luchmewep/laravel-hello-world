<?php

use Illuminate\Support\Facades\Route;

/**
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */

Route::get('greet', function () {
    return customResponse()
        ->data([])
        ->message('Hello to you, Sir!')
        ->generate();
});
