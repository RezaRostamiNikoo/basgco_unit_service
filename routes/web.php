<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'units'], function () use ($router) {
    $router->get('/', ['uses' => 'UnitController@index']);
    $router->get('/{unit}', ['uses' => 'UnitController@detail']);
    $router->post('/create', ['uses' => 'UnitController@create']);
    $router->post('/{unit}/update', ['uses' => 'UnitController@update']);
    $router->delete('/{unit}/delete', ['uses' => 'UnitController@delete']);
});
