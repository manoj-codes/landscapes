<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('photographers',  ['uses' => 'PhotographerController@showAllPhotographers']);

    $router->get('photographers/{id}', ['uses' => 'PhotographerController@showPhotographerAlbums']);

  });
