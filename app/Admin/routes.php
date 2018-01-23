<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    //$router->get('/collections/{id}/edit/create', 'CymbalsController@create');
    //$router->post('/collections/{id}/edit/create', 'CymbalsController@store');

    $router->resource('/collections', CollectionController::class);
    $router->resource('/collections/{collection_id}/edit/', CymbalsController::class);
    $router->get('/collections/{collection_id}/edit/{id}/edit', 'CymbalsController@edit');

    //$router->post('/collections/{collection_id}/edit/{id}', 'CymbalsController@update');



});
