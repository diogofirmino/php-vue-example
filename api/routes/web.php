<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Http\Controllers\CartController;

$router->get('/', fn () => $router->app->version());

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/',  CartController::class);
    $router->get('cart',  CartController::class);
});
