<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/auth', 'HomeController@index');
    $router->put('/{home}', 'HomeController@update');

    $router->resource('games', GamesController::class);
    $router->resource('article', ArticleController::class);
    $router->resource('articleCate', ArticleCateController::class);
});
